
## laravel helpers functions
Laravel provides a variety of helper functions to simplify common tasks and operations within your application. Here are 25 Laravel helper functions along with examples:

1. **`dd()` - Dump and Die:**
   - Example:
     ```
     $data = ['name' => 'John', 'age' => 30];
     dd($data);
     ```
     ```
       //  array:2 [▼ // routes/web.php:21
          "name" => "John"
          "age" => 30
            ]
     ```
     ```
    $appName = env('APP_NAME', 'shashi');
    dd($appName);
     ```

2. **`collect()` - Create a Collection:**
   - Example:
     ```
     $collection = collect([1, 2, 3]);
     ```
    ```
    Illuminate\Support\Collection {#1230 ▼ /
    //  #items: array:3 [▶
        0 => 1
        1 => 2
        2 => 3
      ]
    ```

3. **`env()` - Access Environment Variables:**
   - Example:
     ```
     $apiKey = env('API_KEY');
     ```
     //null
      ```
    $appName = env('APP_NAME', 'shashi');
    dd($appName);
     ```
     //laravel
4. **`asset()` - Generate a URL for an asset:**
   - Example:
     ```
     $url = asset('css/style.css');
     dd($url);   
     ```
     //"http://127.0.0.1:8000/css/style.css" 

5. **`url()` - Generate a fully qualified URL:**
   - Example:
     ```
     $fullUrl = url('public');
     dd($fullUrl);   
     ```
     //"http://127.0.0.1:8000/public" 
   

6. **`route()` - Generate a URL for a named route:**
   - Example:
     ```
     $url = route('profile');
     dd( $url)
     ```
    // "http://127.0.0.1:8000/profile" 

7. **`config()` - Access Configuration Values:**
   - Example:
     ```
    $timezone = config('app.timezone');
    dd( $timezone)
     ```
     //"UTC" 

8. **`trans()` - Translate a given message:**
   - Example:
     ```
     $translated = trans('messages.welcome');
     ```

9. **`bcrypt()` - Hash a value using the bcrypt algorithm:**
   - Example:
     ```
     $hashedPassword = bcrypt('secret');
     ```

10. **`app()` - Get the Laravel application instance:**
    - Example:
      ```
      $app = app();
      ```

11. **`request()` - Get an instance of the current request:**
    - Example:
      ```
      $name = request('name');
      ```

12. **`session()` - Access the session storage:**
    - Example:
      ```
      $value = session('key');
      ```

13. **`view()` - Create a view instance:**
    - Example:
      ```
      $view = view('welcome');
      ```

14. **`old()` - Retrieve old input values:**
    - Example:
      ```
      $oldValue = old('field_name');
      ```

15. **`now()` - Get the current date and time:**
    - Example:
      ```
      $currentDateTime = now();
      ```

16. **`back()` - Create a new redirect response to the previous location:**
    - Example:
      ```
      return back();
      ```

17. **`redirect()` - Create a new redirect response:**
    - Example:
      ```
      return redirect('home');
      ```

18. **`abort()` - Throw an HTTP exception:**
    - Example:
      ```
      abort(404);
      ```

19. **`public_path()` - Get the fully qualified path to the public directory:**
    - Example:
      ```
      $path = public_path('images');
      ```

20. **`base_path()` - Get the fully qualified path to the project root:**
    - Example:
      ```
      $path = base_path('app');
      ```

21. **`str()` - String helpers (e.g., `str_limit`, `str_slug`, etc.):**
    - Example:
      ```
      $limited = str_limit($text, 50);
      ```

22. **`e()` - Escape HTML entities in a string:**
    - Example:
      ```
      $escaped = e('<script>alert("XSS")</script>');
      ```

23. **`optional()` - Allow method calls on null values:**
    - Example:
      ```
      $user = optional(Auth::user())->name;
      ```

24. **`csrf_field()` - Generate a CSRF token field:**
    - Example:
      ```
      echo csrf_field();
      ```

25. **`csrf_token()` - Get the CSRF token value:**
    - Example:
      ```
      $token = csrf_token();
      ```

26. **`session()->flash()` - Flash data to the session:**
    - Example:
      ```
      session()->flash('message', 'Task was successful!');
      ```

27. **`session()->has()` - Check if a session key exists:**
    - Example:
      ```
      if (session()->has('user_id')) {
          // Do something
      }
      ```

28. **`session()->pull()` - Retrieve and forget a session value:**
    - Example:
      ```
      $value = session()->pull('key');
      ```

29. **`session()->forget()` - Remove a specific item from the session:**
    - Example:
      ```
      session()->forget('key');
      ```

30. **`session()->all()` - Get all session data:**
    - Example:
      ```
      $allData = session()->all();
      ```

31. **`cookie()` - Create a new cookie instance:**
    - Example:
      ```
      $cookie = cookie('name', 'value', 60);
      ```

32. **`cookie()->forever()` - Create a cookie that lasts forever:**
    - Example:
      ```
      $cookie = cookie()->forever('name', 'value');
      ```

33. **`cookie()->queue()` - Attach a cookie to a response:**
    - Example:
      ```
      return response('Hello World')->cookie('name', 'value', 60);
      ```

34. **`request()->has()` - Check if a request parameter exists:**
    - Example:
      ```
      if (request()->has('name')) {
          // Do something
      }
      ```

35. **`request()->input()` - Get a specific input from the request:**
    - Example:
      ```
      $name = request()->input('name');
      ```

36. **`request()->only()` - Get only specified inputs from the request:**
    - Example:
      ```
      $data = request()->only(['name', 'email']);
      ```

37. **`request()->except()` - Exclude specified inputs from the request:**
    - Example:
      ```
      $data = request()->except(['password']);
      ```

38. **`url()->current()` - Get the current URL:**
    - Example:
      ```
      $currentUrl = url()->current();
      ```

39. **`url()->previous()` - Get the previous URL:**
    - Example:
      ```
      $previousUrl = url()->previous();
      ```

40. **`response()` - Create a new response instance:**
    - Example:
      ```
      return response('Hello World', 200);
      ```

41. **`response()->json()` - Create a JSON response:**
    - Example:
      ```
      return response()->json(['name' => 'John']);
      ```

42. **`response()->download()` - Create a file download response:**
    
        - The storage:link Artisan command in Laravel creates a symbolic link from the public directory to the storage directory.
          This allows you to easily access files stored in the storage directory from the public space, making them accessible through the web browser.
        
        To create a symbolic link between the public and storage directories, you can run the following Artisan command:
        
       ```
       php artisan storage:link
       ```
       if file1.txt is located in public directory
       ```
         $filePath = public_path('file1.txt');
                dd($filePath);
              //"/Users/shashikantadas/Database-project/public/file1.txt"    

       or
        if file.txt is located in storage directory

        $filePath = storage_path('file.txt');
                dd($filePath);
             // "/Users/shashikantadas/Database-project/storage/file.txt" 
       ```
       - Example:
       ```
       return response()->download($filePath);
       ```

43. **`response()->file()` - Return the contents of a file:**
    - Example:
      ```
      return response()->file($pathToFile);
      ```

44. **`response()->redirect()` - Create a new redirect response:**
    - Example:
      ```
      return response()->redirect('home');
      ```

45. **`csrf_token()` - Get the CSRF token for forms:**
    - Example:
      ```
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      ```

46. **`csrf_field()` - Generate an HTML form field for CSRF:**
    - Example:
      ```
      {{ csrf_field() }}
      ```

47. **`config_path()` - Get the fully qualified path to the config directory:**
    - Example:
      ```
      $path = config_path('app.php');
      ```
      //  "/Users/shashikantadas/Database-project/config/app.php" 

48. **`storage_path()` - Get the fully qualified path to the storage directory:**
    - Example:
      ```
      $path = storage_path('app/file.txt');
      ```
      // "/Users/shashikantadas/Database-project/storage/app/file.txt" 

49. **`trans_choice()` - Translate a plural message:**
    - Example:
      ```
      $trans = trans_choice('messages.tasks', 5);
      ```

50. **`optional()` - Provide a default value if the given value is null:**
    - Example:
      ```
      $user = optional(Auth::user())->name ?? 'Guest';
      ```

These additional Laravel helper functions cover a wide range of tasks, from working with sessions and cookies to handling responses and requests.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
