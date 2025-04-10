<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit884fef56903b713c160d98ad8b30bbed
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Daan\\Branding\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Daan\\Branding\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit884fef56903b713c160d98ad8b30bbed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit884fef56903b713c160d98ad8b30bbed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit884fef56903b713c160d98ad8b30bbed::$classMap;

        }, null, ClassLoader::class);
    }
}
