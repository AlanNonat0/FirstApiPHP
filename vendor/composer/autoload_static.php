<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54cb2d809e3d4c8b51571e291591919c
{
    public static $files = array (
        '5ba26bec3d440e24661f14b6c2b80cc6' => __DIR__ . '/../..' . '/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Api\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Api\\' => 
        array (
            0 => __DIR__ . '/../..' . '/api',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54cb2d809e3d4c8b51571e291591919c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54cb2d809e3d4c8b51571e291591919c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54cb2d809e3d4c8b51571e291591919c::$classMap;

        }, null, ClassLoader::class);
    }
}
