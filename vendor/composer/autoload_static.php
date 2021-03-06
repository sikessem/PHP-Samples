<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0395618242a1dbac068d758bbbc7e1fd
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Samples\\Samples\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Samples\\Samples\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0395618242a1dbac068d758bbbc7e1fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0395618242a1dbac068d758bbbc7e1fd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0395618242a1dbac068d758bbbc7e1fd::$classMap;

        }, null, ClassLoader::class);
    }
}
