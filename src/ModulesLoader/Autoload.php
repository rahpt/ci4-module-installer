<?php

namespace ModulesLoader;

class Autoload {

    public static function autoload() {
        $modulesPath = dirname(__DIR__, 4) . '/app/Modules';
        $modules = array_diff(scandir($modulesPath), ['.', '..']);

        foreach ($modules as $module) {
            if (is_dir($modulesPath . '/' . $module)) {
                $namespace = 'Modules\\' . $module;
                $path = $modulesPath . '/' . $module;

                \Config\Services::autoloader()->addNamespace($namespace, $path);
            }
        }
    }
}
