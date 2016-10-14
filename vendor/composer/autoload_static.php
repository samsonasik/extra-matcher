<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf8dcd9ef89b69ded37160b73bcc88ed
{
    public static $files = array (
        'c095af1f786e1a0ced4254e6bdc84bff' => __DIR__ . '/..' . '/kahlan/kahlan/src/init.php',
        '337663d83d8353cc8c7847676b3b0937' => __DIR__ . '/..' . '/kahlan/kahlan/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kahlan\\DxMatchers\\Spec\\' => 23,
            'Kahlan\\DxMatchers\\' => 18,
            'Kahlan\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kahlan\\DxMatchers\\Spec\\' => 
        array (
            0 => __DIR__ . '/../..' . '/spec',
        ),
        'Kahlan\\DxMatchers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Kahlan\\' => 
        array (
            0 => __DIR__ . '/..' . '/kahlan/kahlan/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf8dcd9ef89b69ded37160b73bcc88ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf8dcd9ef89b69ded37160b73bcc88ed::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
