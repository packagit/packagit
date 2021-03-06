<?php

/**
 * DON'T CHANGE ANYTHING EXCEPT FOLLOWING
 *
 * 1. namespace
 * 2. composer.*
 *
 */
return [

    // YOU COULD CUSTOM HERE
    'namespace' => 'Packagit',

    /*
    |--------------------------------------------------------------------------
    | Composer File Template
    |--------------------------------------------------------------------------
    |
    | YOU COULD CUSTOM HERE
    |
    */
    'composer'  => [
        'vendor' => 'packagit',
        'author' => [
            'name'  => 'Yin Qisen',
            'email' => 'v@yinqisen.cn',
        ],
    ],

    'paths' => [
        'modules' => base_path('modules'),

        /*
        |--------------------------------------------------------------------------
        | Modules assets path
        |--------------------------------------------------------------------------
        |
        | Here you may update the modules assets path.
        |
        */

        'assets' => public_path('modules'),
        /*
        |--------------------------------------------------------------------------
        | The migrations path
        |--------------------------------------------------------------------------
        |
        | Where you run 'module:publish-migration' command, where do you publish the
        | the migration files?
        |
        */

        'migration' => base_path('database/migrations'),

        /*
        |--------------------------------------------------------------------------
        | Generator path
        |--------------------------------------------------------------------------
        | Customise the paths where the folders will be generated.
        | Set the generate key to false to not generate that folder
        */
        'generator' => [
            'config'        => ['path' => 'config', 'generate' => true],
            'command'       => ['path' => 'src/Console', 'generate' => false],
            'migration'     => ['path' => 'database/migrations', 'generate' => true],
            'seeder'        => ['path' => 'database/seeders', 'generate' => true],
            'factory'       => ['path' => 'database/factories', 'generate' => true],
            'model'         => ['path' => 'src/Models', 'generate' => true],
            'routes'        => ['path' => 'routes', 'generate' => true],
            'controller'    => ['path' => 'src/Http/Controllers', 'generate' => false],
            'filter'        => ['path' => 'src/Http/Middleware', 'generate' => false],
            'request'       => ['path' => 'src/Http/Requests', 'generate' => false],
            'provider'      => ['path' => 'src/Providers', 'generate' => true],
            'assets'        => ['path' => 'resources/assets', 'generate' => true],
            'lang'          => ['path' => 'resources/lang', 'generate' => true],
            'views'         => ['path' => 'resources/views', 'generate' => true],
            'test'          => ['path' => 'tests/Unit', 'generate' => true],
            'test-feature'  => ['path' => 'tests/Feature', 'generate' => true],
            'repository'    => ['path' => 'src/Repositories', 'generate' => false],
            'event'         => ['path' => 'src/Events', 'generate' => false],
            'listener'      => ['path' => 'src/Listeners', 'generate' => false],
            'policies'      => ['path' => 'src/Policies', 'generate' => false],
            'rules'         => ['path' => 'src/Rules', 'generate' => false],
            'jobs'          => ['path' => 'src/Jobs', 'generate' => false],
            'emails'        => ['path' => 'src/Mail', 'generate' => false],
            'notifications' => ['path' => 'src/Notifications', 'generate' => false],
            'resource'      => ['path' => 'src/Http/Resources', 'generate' => false],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Module Stubs
    |--------------------------------------------------------------------------
    |
    | Default module stubs.
    |
    */
    'stubs' => [
        'path'         => dirname(__DIR__) . '/src/Commands/stubs',
        'files'        => [
            'routes/web'        => 'routes/web.php',
            'routes/api'        => 'routes/api.php',
            'views/index'       => 'resources/views/index.blade.php',
            'views/master'      => 'resources/views/layouts/master.blade.php',
            'scaffold/config'   => 'config/config.php',
            'scaffold/provider' => 'src/Providers/ServiceProvider.php',
            'seeder'            => 'database/seeders/DatabaseSeeder.php',
            'route-provider'    => 'src/Providers/RouteServiceProvider.php',
            'command-provider'  => 'src/Providers/CommandServiceProvider.php',
            'composer'          => 'composer.json',
            'assets/js/app'     => 'resources/assets/js/app.js',
            'assets/sass/app'   => 'resources/assets/sass/app.scss',
            'webpack'           => 'webpack.mix.js',
            'package'           => 'package.json',
            'readme'            => 'README.md'
        ],
        'replacements' => [
            'routes/web'        => ['LOWER_NAME', 'STUDLY_NAME'],
            'routes/api'        => ['LOWER_NAME'],
            'readme'            => ['LOWER_NAME', 'STUDLY_NAME'],
            'webpack'           => ['LOWER_NAME'],
            'views/index'       => ['LOWER_NAME'],
            'views/master'      => ['LOWER_NAME', 'STUDLY_NAME'],
            'scaffold/config'   => ['STUDLY_NAME'],
            'scaffold/provider' => ['NAMESPACE', 'LOWER_NAME'],
            'seeder'            => ['NAMESPACE'],
            'route-provider'    => ['NAMESPACE', 'STUDLY_NAME', 'MODULE_NAMESPACE'],
            'command-provider'  => ['NAMESPACE'],
            'composer'          => [
                'LOWER_NAME',
                'STUDLY_NAME',
                'VENDOR',
                'AUTHOR_NAME',
                'AUTHOR_EMAIL',
                'MODULE_NAMESPACE',
                'PROVIDER_NAMESPACE',
            ],
        ],
        'gitkeep'      => true,
    ],

];
