<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit242fa597a1c5eef83144d6da0c7b2295
{
    public static $prefixLengthsPsr4 = array (
        'u' => 
        array (
            'ugo\\Datatable\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ugo\\Datatable\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'DbObject' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
                1 => __DIR__ . '/..' . '/ugo/simlpeorm/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ugo\\Datatable\\Datatable' => __DIR__ . '/../..' . '/src/datatable.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit242fa597a1c5eef83144d6da0c7b2295::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit242fa597a1c5eef83144d6da0c7b2295::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit242fa597a1c5eef83144d6da0c7b2295::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit242fa597a1c5eef83144d6da0c7b2295::$classMap;

        }, null, ClassLoader::class);
    }
}
