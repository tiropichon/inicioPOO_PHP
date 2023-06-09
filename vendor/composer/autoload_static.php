<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a2c3c1c1ceaaae88caa83b5bc818775
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/clases',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a2c3c1c1ceaaae88caa83b5bc818775::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a2c3c1c1ceaaae88caa83b5bc818775::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0a2c3c1c1ceaaae88caa83b5bc818775::$classMap;

        }, null, ClassLoader::class);
    }
}
