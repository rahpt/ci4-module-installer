<?php

namespace Composer\Installers;

class CodeIgniterModuleInstaller extends BaseInstaller {

    protected $locations = array(
        'module' => 'app/Modules/{$name}/',
    );
}
