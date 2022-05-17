<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit140cd1f838b32468b4cb19bacafb3cb7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Src\\' => 4,
        ),
        'M' => 
        array (
            'Model\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/model',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit140cd1f838b32468b4cb19bacafb3cb7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit140cd1f838b32468b4cb19bacafb3cb7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit140cd1f838b32468b4cb19bacafb3cb7::$classMap;

        }, null, ClassLoader::class);
    }
}