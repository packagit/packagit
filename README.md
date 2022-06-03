# Packagit

Packagit is amazing laravel modules management, you could manage huge project with many separate laravel modules. 

You could run `packagit` or a short name `p`, such as `p new Auth`, a module named Auth would be created.

You can make artisan command running anywhere, All the packagit commands are same with artisan like following table.

| artisan                     | packagit          |
|-----------------------------|-------------------|
| php artisan tinker          | p tinker          |
| php artisan make:controller | p make:controller |
| php artisan make:migration  | p make:migration  |
| php artisan make:job        | p make:job        |
| php artisan test            | p test            |
| php artisan ...             | p ...             |

for example, you have a project named `starter`, directories layout:

    starter
        └── modules
            ├── Auth
            ├── Components
            └── Wechat

change path to `starter/modules/Auth`, and run `p make:controller`:

```
cd starter/modules/Auth
p make:controller DemoController
```

DemoController.php would be created for Auth module.

```
modules/Auth/src/Http/
└── Controllers
   └── DemoController.php
```

change path to `starter/app/Http/Controllers`, and `p make:controller`:

```
cd starter/app/Http/Controllers
p make:controller DemoController
```

DemoController.php would be created for starter, because of current path doesn't include any module.

So when you run `p make:xxx` laravel command, packagit would scan the path, if current is in a module path, it will create for the module, otherwise for the project.

## Installation

`composer global require packagit/packagit`

You MUST install `packagit` with `global`, and add composer bin to the $PATH environment. 

Following command would help you find the global bin path:

```
composer global config bin-dir --absolute --global

# such as $HOME/.composer/vendor/bin, add to $PATH
# save to ~/.zshrc or ~/.bashrc
export PATH=$HOME/.composer/vendor/bin:$PATH
```

## Usage

**1. Create a new module**

run `packagit new ModuleName`

you also could group many modules as `Components` or others you want.

```
packagit new Components/NetUtil
packagit new Components/Updater
packagit new Components/Downloader
packagit new Components/A/B/C/...
```

**2. Custom package namespace**

run `p custom`

config/packagit.php file would be created, you could customize namespace by edit this file.


### A Module Structure:

```
├── README.md
├── composer.json
├── config
│   └── config.php
├── database
│   ├── factories
│   ├── migrations
│   └── seeders
│       └── DatabaseSeeder.php
├── package.json
├── resources
├── routes
│   ├── api.php
│   └── web.php
├── src
│   ├── Models
│   └── Providers
│       ├── CommandServiceProvider.php
│       ├── RouteServiceProvider.php
│       └── ServiceProvider.php
├── tests
│   ├── Feature
│   └── Unit
└── webpack.mix.js
```

### Load modules in project

1、composer require `wikimedia/composer-merge-plugin`

edit project/composer.json => extra => merge-plugins:

```
    "extra": {
        "merge-plugin": {
            "include": [
                "modules/*/composer.json",
                "modules/Components/*/composer.json"
            ],
            "recurse": false,
            "replace": true,
            "ignore-duplicates": false,
            "merge-dev": true,
            "merge-extra": true,
            "merge-extra-deep": true
        },
        "laravel": {
            "dont-discover": []
        }
    },
```
2、composer dump-autoload

3、edit project/config/app.php

```
    'providers' => [
        \Packagit\[MoudleName]\Providers\ServiceProvider::class, 
    ],
```


All done, modules should work well.

## License

The Apache License 2. Please see [License File](LICENSE.md) for more information.
