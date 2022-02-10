<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit327c87da7b5f30a0a9cd02a65a814e0d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit327c87da7b5f30a0a9cd02a65a814e0d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit327c87da7b5f30a0a9cd02a65a814e0d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit327c87da7b5f30a0a9cd02a65a814e0d::$classMap;

        }, null, ClassLoader::class);
    }
}
