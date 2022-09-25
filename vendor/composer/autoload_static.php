<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit873b256028c6af2aaebb028452ed0434
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'pop1' => __DIR__ . '/../..' . '/App/Model/pop1.php',
        'pop2' => __DIR__ . '/../..' . '/App/Model/pop2.php',
        'pop3' => __DIR__ . '/../..' . '/App/Model/pop3.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit873b256028c6af2aaebb028452ed0434::$classMap;

        }, null, ClassLoader::class);
    }
}
