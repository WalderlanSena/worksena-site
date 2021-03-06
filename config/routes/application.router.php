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

    'documentation-routes' => [
        'method'        => 'GET',
        'route'         => '/documentacao/rotas',
        'controller'    =>  DocumentationInitController::class,
        'action'        => 'route',
    ],

    'documentation-controller' => [
        'method'        => 'GET',
        'route'         => '/documentacao/controller',
        'controller'    =>  DocumentationInitController::class,
        'action'        => 'controller',
    ],

    'documentation-dependency' => [
        'method'        => 'GET',
        'route'         => '/documentacao/injecao-de-dependencia',
        'controller'    =>  DocumentationInitController::class,
        'action'        => 'dependency',
    ],
];