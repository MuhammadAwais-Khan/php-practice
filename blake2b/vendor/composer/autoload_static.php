<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8d686830298fde425c9980bcb31046ec
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MyApp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MyApp\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8d686830298fde425c9980bcb31046ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8d686830298fde425c9980bcb31046ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8d686830298fde425c9980bcb31046ec::$classMap;

        }, null, ClassLoader::class);
    }
}
