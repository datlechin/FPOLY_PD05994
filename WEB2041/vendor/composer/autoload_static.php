<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit024c9784e19f43eeaaea9d6b811d7871
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sirius\\Validation\\' => 18,
            'Sirius\\Upload\\' => 14,
        ),
        'R' => 
        array (
            'Rakit\\Validation\\' => 17,
        ),
        'M' => 
        array (
            'Medoo\\' => 6,
        ),
        'A' => 
        array (
            'Ausi\\SlugGenerator\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sirius\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/siriusphp/validation/src',
        ),
        'Sirius\\Upload\\' => 
        array (
            0 => __DIR__ . '/..' . '/siriusphp/upload/src',
        ),
        'Rakit\\Validation\\' => 
        array (
            0 => __DIR__ . '/..' . '/rakit/validation/src',
        ),
        'Medoo\\' => 
        array (
            0 => __DIR__ . '/..' . '/catfan/medoo/src',
        ),
        'Ausi\\SlugGenerator\\' => 
        array (
            0 => __DIR__ . '/..' . '/ausi/slug-generator/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'F' => 
        array (
            'FileUpload\\' => 
            array (
                0 => __DIR__ . '/..' . '/gargron/fileupload/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit024c9784e19f43eeaaea9d6b811d7871::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit024c9784e19f43eeaaea9d6b811d7871::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit024c9784e19f43eeaaea9d6b811d7871::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit024c9784e19f43eeaaea9d6b811d7871::$classMap;

        }, null, ClassLoader::class);
    }
}
