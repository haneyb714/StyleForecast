
    <?php

    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Http\Request;
    use App\Models\User;
    use App\Models\Message;


    /*
    |--------------------------------------------------------------------------
    | Weather Description
    |--------------------------------------------------------------------------
    */

    if (!function_exists('weatherDescription')) {
        function weatherDescription($code)
        {
            return match ((int) $code) {
                0 => 'Clear Sky',
                1 => 'Mainly Clear',
                2 => 'Partly Cloudy',
                3 => 'Overcast',
                45, 48 => 'Foggy',
                51, 53, 55 => 'Drizzle',
                56, 57 => 'Freezing Drizzle',
                61, 63, 65 => 'Rain',
                66, 67 => 'Freezing Rain',
                71, 73, 75 => 'Snow',
                77 => 'Snow Grains',
                80, 81, 82 => 'Rain Showers',
                85, 86 => 'Snow Showers',
                95 => 'Thunderstorm',
                96, 99 => 'Thunderstorm with Hail',
                default => 'Unknown Weather',
            };
        }
    }


    /*
    |--------------------------------------------------------------------------
    | Home
    |--------------------------------------------------------------------------
    */

    Route::get('/', function () {

        if (!Auth::check()) {
            return redirect('/login');
        }

        if (Auth::user()->role === 'admin') {
            return redirect('/admin');
        }

        return redirect('/dashboard');
    });


    /*
    |--------------------------------------------------------------------------
    | Login
    |--------------------------------------------------------------------------
    */

    Route::get('/login', function () {

        if (Auth::check()) {

            if (Auth::user()->role === 'admin') {
                return redirect('/admin');
            }

            return redirect('/dashboard');
        }

        return view('login');
    })->name('login');


    Route::post('/login', function (Request $request) {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {

            return back()
                ->withInput()
                ->with('error', 'Invalid email or password.');
        }

        Auth::login($user);

        $request->session()->regenerate();

        if ($user->role === 'admin') {
            return redirect('/admin');
        }

        return redirect('/dashboard');

    });


   
/*
|--------------------------------------------------------------------------
| Register
|--------------------------------------------------------------------------
*/

Route::get('/register', function () {

    if (Auth::check()) {
        if (Auth::user()->role === 'admin') {
            return redirect('/admin');
        }

        return redirect('/dashboard');
    }

    return view('register');

})->name('register');


Route::post('/register', function (Request $request) {

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|string|min:6|confirmed',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role' => 'user',
    ]);

    Auth::login($user);
    $request->session()->regenerate();

    return redirect('/dashboard');

})->name('register.store');


    /*
    |--------------------------------------------------------------------------
    | Dashboard / Weather
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', function (Request $request) {

        if (!Auth::check()) {
            return redirect('/login');
        }

        if (Auth::user()->role === 'admin') {
            return redirect('/admin');
        }


        /*
        |--------------------------------------------------------------------------
        | Check if user searched for a new city
        |--------------------------------------------------------------------------
        */

        $requestedCity = trim($request->query('city', ''));


        /*
        |--------------------------------------------------------------------------
        | Load previously saved weather
        |--------------------------------------------------------------------------
        */

        $savedWeather = null;

        $weatherFile = storage_path('app/styleforecast_weather.json');

        if (file_exists($weatherFile)) {

            $savedWeather = json_decode(
                file_get_contents($weatherFile),
                true
            );

        }


        /*
        |--------------------------------------------------------------------------
        | If no new city was searched and saved weather exists,
        | show the saved weather first.
        |--------------------------------------------------------------------------
        */
if ($requestedCity === '' && is_array($savedWeather)) {

    $weather = $savedWeather;

    $weatherCode = (int) ($weather['weather_code'] ?? 0);

    $rainyCodes = [
        51, 53, 55, 56, 57,
        61, 63, 65, 66, 67,
        80, 81, 82, 95, 96, 99
    ];

    return view('dashboard', [
        'city' => $weather['city'] ?? 'Lapu-Lapu City',
        'weather' => $weather,
        'weatherImage' => in_array($weatherCode, $rainyCodes)
            ? 'rainy.png'
            : 'cloudy.png',
        'weatherDescription' => weatherDescription($weatherCode),
        'error' => null,
    ]);
}

        /*
        |--------------------------------------------------------------------------
        | Default city
        |--------------------------------------------------------------------------
        */

        $city = $requestedCity !== ''
            ? $requestedCity
            : 'Lapu-Lapu City';


        try {

            /*
            |--------------------------------------------------------------------------
            | Internet timeout settings
            |--------------------------------------------------------------------------
            */

            $context = stream_context_create([
        'http' => [
            'timeout' => 15,
            'ignore_errors' => true,
            'header' =>
                "User-Agent: StyleForecast/1.0\r\n" .
                "Accept: application/json\r\n",
        ],

        'ssl' => [
            'verify_peer' => true,
            'verify_peer_name' => true,
        ],
    ]);


            /*
            |--------------------------------------------------------------------------
            | STEP 1: Find City Coordinates
            |--------------------------------------------------------------------------
            */

            $geocodeUrl =
                'https://geocoding-api.open-meteo.com/v1/search?' .
                http_build_query([
                    'name' => $city,
                    'count' => 1,
                    'language' => 'en',
                    'format' => 'json',
                ]);


            $geoResponse = @file_get_contents(
                $geocodeUrl,
                false,
                $context
            );


            if ($geoResponse === false) {
                throw new Exception('Unable to connect to the weather service.');
            }


            $geoData = json_decode($geoResponse, true);


            if (
                !isset($geoData['results']) ||
                count($geoData['results']) === 0
            ) {
                throw new Exception(
                    'City not found. Please check the spelling and try again.'
                );
            }


            $latitude =
                $geoData['results'][0]['latitude'];

            $longitude =
                $geoData['results'][0]['longitude'];

            $foundCity =
                $geoData['results'][0]['name']
                ?? $city;

            $country =
                $geoData['results'][0]['country']
                ?? '';


            /*
            |--------------------------------------------------------------------------
            | STEP 2: Get Weather
            |--------------------------------------------------------------------------
            */

            $weatherUrl =
                'https://api.open-meteo.com/v1/forecast?' .
                http_build_query([
                    'latitude' => $latitude,
                    'longitude' => $longitude,

                    'current' =>
                        'temperature_2m,' .
                        'relative_humidity_2m,' .
                        'apparent_temperature,' .
                        'weather_code,' .
                        'wind_speed_10m',

                    'daily' =>
                        'weather_code,' .
                        'temperature_2m_max,' .
                        'temperature_2m_min,' .
                        'precipitation_probability_mean',

                    'timezone' => 'auto',

                    'forecast_days' => 3,
                ]);


            $weatherResponse = @file_get_contents(
                $weatherUrl,
                false,
                $context
            );


            if ($weatherResponse === false) {
                throw new Exception(
                    'Unable to retrieve weather information.'
                );
            }


            $weatherData = json_decode(
                $weatherResponse,
                true
            );


            if (
                !isset($weatherData['current']) ||
                !isset($weatherData['daily'])
            ) {
                throw new Exception(
                    'Invalid weather data received.'
                );
            }


            /*
            |--------------------------------------------------------------------------
            | Current Weather
            |--------------------------------------------------------------------------
            */

            $current =
                $weatherData['current'];

            $daily =
                $weatherData['daily'];


            $weatherCode =
                $current['weather_code'] ?? 0;
                

if (in_array($weatherCode, [
    51, 53, 55, 56, 57,
    61, 63, 65, 66, 67,
    80, 81, 82, 95, 96, 99
])) {
    $weatherImage = 'rainy.png';
} else {
    $weatherImage = 'cloudy.png';
}



            $temperature =
                $current['temperature_2m'] ?? 0;


            $humidity =
                $current['relative_humidity_2m'] ?? 0;


            $feelsLike =
                $current['apparent_temperature'] ?? $temperature;


            $windSpeed =
                $current['wind_speed_10m'] ?? 0;


            /*
            |--------------------------------------------------------------------------
            | Build Weather Array
            |--------------------------------------------------------------------------
            */

            $weather = [

                'city' => $foundCity,

                'country' => $country,

                'temperature' => $temperature,

                'humidity' => $humidity,

                'feels_like' => $feelsLike,

                'weather_code' => $weatherCode,

                'condition' =>
                    weatherDescription($weatherCode),

                'wind_speed' => $windSpeed,

                'wind' => $windSpeed,

                'forecast' => [

                    'time' =>
                        $daily['time'] ?? [],

                    'weather_code' =>
                        $daily['weather_code'] ?? [],

                    'temperature_2m_max' =>
                        $daily['temperature_2m_max'] ?? [],

                    'temperature_2m_min' =>
                        $daily['temperature_2m_min'] ?? [],

                    'precipitation_probability_mean' =>
                        $daily['precipitation_probability_mean'] ?? [],

                ],
            ];


            /*
            |--------------------------------------------------------------------------
            | SAVE WEATHER TO FILE
            |--------------------------------------------------------------------------
            |
            | This is the important part.
            |
            | Even if the user logs out, this weather data remains available.
            |
            */

            file_put_contents(
                $weatherFile,
                json_encode(
                    $weather,
                    JSON_PRETTY_PRINT
                )
            );


            /*
            |--------------------------------------------------------------------------
            | Also save to current session
            |--------------------------------------------------------------------------
            */

            session([
                'styleforecast_weather' => $weather
            ]);


            return view('dashboard', [
                'city' => $foundCity,
                'weather' => $weather,
                'weatherImage' => $weatherImage,
                'error' => null,
            ]);

        } catch (\Throwable $e) {

            if (is_array($savedWeather)) {
                $weather = $savedWeather;

                $weatherImage = in_array(
                    (int) ($weather['weather_code'] ?? 0),
                    [
                        51, 53, 55, 56, 57,
                        61, 63, 65, 66, 67,
                        80, 81, 82, 95, 96, 99
                    ]
                ) ? 'rainy.png' : 'cloudy.png';

                return view('dashboard', [
                    'city' => $weather['city'] ?? 'Lapu-Lapu City',
                    'weather' => $weather,
                    'weatherImage' => $weatherImage,
                    'error' => 'Weather service is temporarily unavailable. Showing your last weather data.',
                ]);
            }

            return view('dashboard', [
                'city' => $city,
                'weather' => null,
                'weatherImage' => 'cloudy.png',
                'error' => 'Weather service is temporarily unavailable. Please try again.',
            ]);

        }

    });


    /*
    |--------------------------------------------------------------------------
    | Outfit Recommendations
    |--------------------------------------------------------------------------
    */

    Route::get('/outfit-recommendations', function () {

        if (!Auth::check()) {
            return redirect('/login');
        }

        if (Auth::user()->role === 'admin') {
            return redirect('/admin');
        }


        $weather = session('styleforecast_weather');


        /*
        |--------------------------------------------------------------------------
        | If session weather is gone, load saved weather file
        |--------------------------------------------------------------------------
        */

        if (!$weather) {

            $weatherFile =
                storage_path('app/styleforecast_weather.json');

            if (file_exists($weatherFile)) {

                $weather = json_decode(
                    file_get_contents($weatherFile),
                    true
                );

            }
        }

$recommendedCategory = 'cloudy';

if ($weather) {
    $code = (int) ($weather['weather_code'] ?? 0);

    $rainyCodes = [
        51, 53, 55, 56, 57,
        61, 63, 65, 66, 67,
        80, 81, 82, 95, 96, 99
    ];

    if (in_array($code, $rainyCodes, true)) {
        $recommendedCategory = 'rainy';

    } elseif (in_array($code, [0, 1], true)) {
        $recommendedCategory = 'sunny';

    } elseif (in_array($code, [2, 3, 45, 48], true)) {
        $recommendedCategory = 'cloudy';

    } elseif (in_array($code, [71, 73, 75, 77, 85, 86], true)) {
        $recommendedCategory = 'cold';

    } else {
        $recommendedCategory = 'cloudy';
    }
}


return view('outfit-recommendations', [
    'weather' => $weather,
    'recommendedCategory' => $recommendedCategory,
]);

   })->name('outfit.recommendations');

    
/*
|--------------------------------------------------------------------------
| User Profile
|--------------------------------------------------------------------------
*/

Route::get('/profile', function () {

    if (!Auth::check()) {
        return redirect('/login');
    }

    if (Auth::user()->role === 'admin') {
        return redirect('/admin');
    }

    return view('profile', [
        'user' => Auth::user(),
    ]);

})->name('profile');


/*
|--------------------------------------------------------------------------
| Update User Profile
|--------------------------------------------------------------------------
*/

Route::put('/profile', function (Request $request) {

    if (!Auth::check()) {
        return redirect('/login');
    }

    if (Auth::user()->role === 'admin') {
        return redirect('/admin');
    }

    $user = Auth::user();

    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => [
            'required',
            'email',
            'max:255',
            \Illuminate\Validation\Rule::unique('users', 'email')
                ->ignore($user->id),
        ],
    ]);

    $user->name = $validated['name'];
    $user->email = $validated['email'];
    $user->save();

    return redirect()->route('profile')
        ->with('success', 'Profile updated successfully!');

})->name('profile.update');



/*
|--------------------------------------------------------------------------
| Logout
|--------------------------------------------------------------------------
*/

Route::post('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/login');

})->name('logout');

    /*
    |--------------------------------------------------------------------------
    | About
    |--------------------------------------------------------------------------
    */

    Route::get('/about', function () {

        return view('about');

    });


    /*
    |--------------------------------------------------------------------------
    | Contact
    |--------------------------------------------------------------------------
    */

    Route::get('/contact', function () {

        return view('contact');

    });


    Route::post('/contact', function (Request $request) {

        $request->validate([

            'name' =>
                'required|string|max:255',

            'email' =>
                'required|email',

            'message' =>
                'required|string',

        ]);


        Message::create([

            'name' =>
                $request->name,

            'email' =>
                $request->email,

            'message' =>
                $request->message,

        ]);


        return back()->with(
            'success',
            'Your message has been sent successfully!'
        );

    });


    /*
    |--------------------------------------------------------------------------
    | ADMIN
    |--------------------------------------------------------------------------
    */

    Route::get('/admin', function () {

        if (!Auth::check()) {
            return redirect('/login');
        }

        if (Auth::user()->role !== 'admin') {
            return redirect('/dashboard');
        }


        $users =
            User::orderBy(
                'created_at',
                'desc'
            )->get();


        $messages =
            Message::orderBy(
                'created_at',
                'desc'
            )->get();


        return view('admin', [

            'users' =>
                $users,

            'messages' =>
                $messages,

        ]);

    });


    /*
    |--------------------------------------------------------------------------
    | Delete Message
    |--------------------------------------------------------------------------
    */

    Route::delete('/admin/messages/{id}', function ($id) {

        if (!Auth::check()) {
            return redirect('/login');
        }

        if (Auth::user()->role !== 'admin') {
            return redirect('/dashboard');
        }


        $message =
            Message::findOrFail($id);


        $message->delete();


        return back()->with(
            'success',
            'Message deleted successfully.'
        );

    });


    /*
    |--------------------------------------------------------------------------
    | Admin Reply
    |--------------------------------------------------------------------------
    */

    Route::post('/admin/messages/{id}/reply', function (
        Request $request,
        $id
    ) {

        if (!Auth::check()) {
            return redirect('/login');
        }

        if (Auth::user()->role !== 'admin') {
            return redirect('/dashboard');
        }


        $request->validate([

            'reply' =>
                'required|string',

        ]);


        $message =
            Message::findOrFail($id);


        $message->reply =
            $request->reply;


        $message->save();


        return back()->with(
            'success',
            'Reply sent successfully.'
        );

    });

    
/*
|--------------------------------------------------------------------------
| Delete Registered User
|--------------------------------------------------------------------------
*/

Route::delete('/admin/users/{id}', function ($id) {

    if (!Auth::check()) {
        return redirect('/login');
    }

    if (Auth::user()->role !== 'admin') {
        abort(403, 'Unauthorized action.');
    }

    $user = User::findOrFail($id);

    // Never allow this route to delete an admin account.
    if ($user->role === 'admin') {
        return back()->with('error', 'Admin accounts cannot be deleted.');
    }

    $user->delete();

    return back()->with('success', 'User deleted successfully.');

})->name('admin.users.delete');

