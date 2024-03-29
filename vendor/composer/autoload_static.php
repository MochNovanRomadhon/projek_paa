<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3a32499a2ae761e5f6c4d8b92c2a6d85
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
        'A' => 
        array (
            'Asus\\Phpcrud\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
        'Asus\\Phpcrud\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3a32499a2ae761e5f6c4d8b92c2a6d85::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3a32499a2ae761e5f6c4d8b92c2a6d85::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3a32499a2ae761e5f6c4d8b92c2a6d85::$classMap;

        }, null, ClassLoader::class);
    }
}
