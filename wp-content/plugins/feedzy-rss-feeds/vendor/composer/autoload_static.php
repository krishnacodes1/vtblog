<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit97eb2251fdc012f5c1c5894605a1a338
{
    public static $files = array (
        '3df8ee254224091c21b9aebb792d2f8b' => __DIR__ . '/..' . '/codeinwp/themeisle-sdk/load.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit97eb2251fdc012f5c1c5894605a1a338::$classMap;

        }, null, ClassLoader::class);
    }
}
