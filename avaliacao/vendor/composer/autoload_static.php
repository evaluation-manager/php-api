<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6bf3ec7f5dfaa66e4f975a751a76e69e
{
    public static $files = array (
        'bf4d70d2a5bd87e46b5ace9f87a38615' => __DIR__ . '/..' . '/landkit/php8-functions/src/Functions.php',
        'f6a08bef1214609622f50bafdcc565ba' => __DIR__ . '/../..' . '/src/Boot/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'L' => 
        array (
            'LandKit\\Route\\' => 14,
            'LandKit\\Model\\' => 14,
            'LandKit\\DotEnv\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'LandKit\\Route\\' => 
        array (
            0 => __DIR__ . '/..' . '/landkit/php8-route/src',
        ),
        'LandKit\\Model\\' => 
        array (
            0 => __DIR__ . '/..' . '/landkit/php8-model/src',
        ),
        'LandKit\\DotEnv\\' => 
        array (
            0 => __DIR__ . '/..' . '/landkit/php8-dotenv/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6bf3ec7f5dfaa66e4f975a751a76e69e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6bf3ec7f5dfaa66e4f975a751a76e69e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6bf3ec7f5dfaa66e4f975a751a76e69e::$classMap;

        }, null, ClassLoader::class);
    }
}
