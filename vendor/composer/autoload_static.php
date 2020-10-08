<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit63e2d63656c07237c432f2d13c204a3e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Curl\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Curl\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-curl-class/php-curl-class/src/Curl',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit63e2d63656c07237c432f2d13c204a3e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit63e2d63656c07237c432f2d13c204a3e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
