<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00aef4384489bde976877aab13eba514
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Packagit\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Packagit\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit00aef4384489bde976877aab13eba514::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00aef4384489bde976877aab13eba514::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit00aef4384489bde976877aab13eba514::$classMap;

        }, null, ClassLoader::class);
    }
}
