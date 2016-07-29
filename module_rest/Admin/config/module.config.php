<?php
namespace Admin;
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 20/07/2016
 * Time: 22:27
 */


use Admin\Controller\Factory\AdminControllerFactory;
use Admin\Controller\Factory\CidadesControllerFactory;
use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'admin' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/',
                    'defaults' => [
                        'controller' => Controller\AdminController::class,
                        'action'     => 'index',
                    ],
                ],
            ],
            'application' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/application[/:action]',
                    'defaults' => [
                        'controller'    => Controller\AdminController::class,
                        'action'        => 'index',
                    ],
                ],
            ],
            'cidades' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/cidades[/:action]',
                    'defaults' => [
                        'controller'    => Controller\CidadesController::class,
                        'action'        => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\AdminController::class => AdminControllerFactory::class,
            Controller\CidadesController::class => CidadesControllerFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
