<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7ab69bb59aa5727741c217b7248f6220
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tuupola\\Middleware\\' => 19,
            'Tuupola\\Http\\Factory\\' => 21,
        ),
        'S' => 
        array (
            'Slim\\Tests\\' => 11,
            'Slim\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Server\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Container\\' => 14,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tuupola\\Middleware\\' => 
        array (
            0 => __DIR__ . '/..' . '/tuupola/callable-handler/src',
            1 => __DIR__ . '/..' . '/tuupola/slim-jwt-auth/src',
        ),
        'Tuupola\\Http\\Factory\\' => 
        array (
            0 => __DIR__ . '/..' . '/tuupola/http-factory/src',
        ),
        'Slim\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/tests',
        ),
        'Slim\\' => 
        array (
            0 => __DIR__ . '/..' . '/slim/slim/Slim',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Server\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-server-handler/src',
            1 => __DIR__ . '/..' . '/psr/http-server-middleware/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7ab69bb59aa5727741c217b7248f6220::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7ab69bb59aa5727741c217b7248f6220::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7ab69bb59aa5727741c217b7248f6220::$classMap;

        }, null, ClassLoader::class);
    }
}
