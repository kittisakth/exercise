<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => 'Counting Alphabet',

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Http' => Illuminate\Support\Facades\Http::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

    'default_profile' => 'data:image/png;base64,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'

];
