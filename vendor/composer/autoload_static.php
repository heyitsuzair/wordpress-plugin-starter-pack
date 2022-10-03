<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4bca81d02dd1ea28f309b1bf5980892b
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Includes\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Includes\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4bca81d02dd1ea28f309b1bf5980892b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4bca81d02dd1ea28f309b1bf5980892b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4bca81d02dd1ea28f309b1bf5980892b::$classMap;

        }, null, ClassLoader::class);
    }
}
