<?php

namespace Config\Router;

use Application\Controller\ApplicationController;
use Documentation\Controller\DocumentationInitController;

return [
    'home' => [
        'method'        => 'GET',
        'route'         => '/',
        'controller'    =>  ApplicationController::class,
        'action'        => 'index',
    ],

    'documentation' => [
        'method'        => 'GET',
        'route'         => '/documentacao',
        'controller'    =>  DocumentationInitController::class,
        'action'        => 'init',
    ],

    'documentation-init' => [
        'method'        => 'GET',
        'route'         => '/documentacao/instalacao',
        'controller'    =>  DocumentationInitController::class,
        'action'        => 'init',
    ],

    'documentation-module' => [
        'method'        => 'GET',
        'route'         => '/documentacao/modulo',
        'controller'    =>  DocumentationInitController::class,
        'action'        => 'module',
    ],
];