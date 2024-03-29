<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4608b548530a3ae54222e410e0e71c7
{
    public static $prefixLengthsPsr4 = array (
        'j' => 
        array (
            'jet\\' => 4,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'V' => 
        array (
            'Valitron\\' => 9,
        ),
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'jet\\' => 
        array (
            0 => __DIR__ . '/..' . '/jet/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Valitron\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/valitron/src/Valitron',
        ),
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4608b548530a3ae54222e410e0e71c7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4608b548530a3ae54222e410e0e71c7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
