<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f41053ea337d5e4ec79f41aea77e926
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Denis\\AppMensageiro\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Denis\\AppMensageiro\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f41053ea337d5e4ec79f41aea77e926::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f41053ea337d5e4ec79f41aea77e926::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f41053ea337d5e4ec79f41aea77e926::$classMap;

        }, null, ClassLoader::class);
    }
}
