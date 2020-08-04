<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1dc988495616e5a701f41ea8c23393f0
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Controller\\ArticlesController' => __DIR__ . '/../..' . '/src/controller/ArticlesController.php',
        'App\\Model\\Animal' => __DIR__ . '/../..' . '/src/model/Animal.php',
        'App\\Model\\AnimalZoo' => __DIR__ . '/../..' . '/src/model/AnimalZoo.php',
        'App\\Model\\Zoo' => __DIR__ . '/../..' . '/src/model/Zoo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1dc988495616e5a701f41ea8c23393f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1dc988495616e5a701f41ea8c23393f0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1dc988495616e5a701f41ea8c23393f0::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit1dc988495616e5a701f41ea8c23393f0::$classMap;

        }, null, ClassLoader::class);
    }
}
