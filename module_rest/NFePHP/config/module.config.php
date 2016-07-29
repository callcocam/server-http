<?php
namespace NFePHP;
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 21/07/2016
 * Time: 01:04
 */
use NFePHP\Controller\Factory\NfeControllerFactory;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'nfe' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/nfe[/:action]',
                    'defaults' => [
                        'controller'    => Controller\NfeController::class,
                        'action'        => 'index',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\NfeController::class => NfeControllerFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
