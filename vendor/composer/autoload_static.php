<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2c6f390e0b3e60c950d4a464e789309
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'Adm\\SolarEnergyWebsiteTemplate\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Adm\\SolarEnergyWebsiteTemplate\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2c6f390e0b3e60c950d4a464e789309::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2c6f390e0b3e60c950d4a464e789309::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd2c6f390e0b3e60c950d4a464e789309::$classMap;

        }, null, ClassLoader::class);
    }
}
