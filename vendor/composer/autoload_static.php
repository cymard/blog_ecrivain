<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit66ecb2442d1d18039b40238cba623c05
{
    public static $prefixLengthsPsr4 = array (
        'r' => 
        array (
            'router\\' => 7,
        ),
        'm' => 
        array (
            'models\\' => 7,
        ),
        'd' => 
        array (
            'database\\' => 9,
        ),
        'c' => 
        array (
            'controllers\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'router\\' => 
        array (
            0 => __DIR__ . '/../..' . '/router',
        ),
        'models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'database\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database',
        ),
        'controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/controllers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit66ecb2442d1d18039b40238cba623c05::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit66ecb2442d1d18039b40238cba623c05::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
