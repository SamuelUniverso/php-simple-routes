<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitaff39162e8a1ce54602e32591c7d20b0
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitaff39162e8a1ce54602e32591c7d20b0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitaff39162e8a1ce54602e32591c7d20b0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitaff39162e8a1ce54602e32591c7d20b0::$classMap;

        }, null, ClassLoader::class);
    }
}