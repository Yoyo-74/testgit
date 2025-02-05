<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdb55ab3a826cc81720434dd90eab926
{
    public static $classMap = array (
        'AltoRouter' => __DIR__ . '/..' . '/altorouter/altorouter/AltoRouter.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ControllerVille' => __DIR__ . '/../..' . '/controller/ControllerVille.php',
        'Model' => __DIR__ . '/../..' . '/model/Model.php',
        'ModelVille' => __DIR__ . '/../..' . '/model/ModelVille.php',
        'Ville' => __DIR__ . '/../..' . '/entity/Ville.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitfdb55ab3a826cc81720434dd90eab926::$classMap;

        }, null, ClassLoader::class);
    }
}
