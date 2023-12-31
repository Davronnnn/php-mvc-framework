<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc6a4b99fd9e052c18ef7725553f836e
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc6a4b99fd9e052c18ef7725553f836e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc6a4b99fd9e052c18ef7725553f836e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc6a4b99fd9e052c18ef7725553f836e::$classMap;

        }, null, ClassLoader::class);
    }
}
