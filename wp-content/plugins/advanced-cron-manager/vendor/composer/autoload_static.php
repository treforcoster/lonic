<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8163cfec9d18b389656cb27b7a241f24
{
    public static $prefixLengthsPsr4 = array (
        'u' => 
        array (
            'underDEV\\Utils\\' => 15,
            'underDEV\\AdvancedCronManager\\' => 29,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'underDEV\\Utils\\' => 
        array (
            0 => __DIR__ . '/..' . '/underdev/utils/src',
        ),
        'underDEV\\AdvancedCronManager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'underDEV_Requirements' => __DIR__ . '/..' . '/underdev/requirements/underDEV_Requirements.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8163cfec9d18b389656cb27b7a241f24::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8163cfec9d18b389656cb27b7a241f24::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8163cfec9d18b389656cb27b7a241f24::$classMap;

        }, null, ClassLoader::class);
    }
}
