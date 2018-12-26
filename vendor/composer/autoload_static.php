<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc47aba4689bb784bd180f9adad7ca92
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc47aba4689bb784bd180f9adad7ca92::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc47aba4689bb784bd180f9adad7ca92::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}