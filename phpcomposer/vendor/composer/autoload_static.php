<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf314dfd993b904d74853c66338987a6e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Php\\Biblioteca\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Php\\Biblioteca\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf314dfd993b904d74853c66338987a6e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf314dfd993b904d74853c66338987a6e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf314dfd993b904d74853c66338987a6e::$classMap;

        }, null, ClassLoader::class);
    }
}
