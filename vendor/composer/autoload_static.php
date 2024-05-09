<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0534df13bb65bf05acea719bb997d74d
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0534df13bb65bf05acea719bb997d74d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0534df13bb65bf05acea719bb997d74d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0534df13bb65bf05acea719bb997d74d::$classMap;

        }, null, ClassLoader::class);
    }
}