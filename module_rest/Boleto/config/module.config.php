<?php
namespace Boleto;
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 26/07/2016
 * Time: 22:19
 */

use Boleto\Controller\Factory\BbControllerFactory;
use Boleto\Controller\Factory\BradescoControllerFactory;
use Boleto\Controller\Factory\BrbControllerFactory;
use Boleto\Controller\Factory\CaixaControllerFactory;
use Boleto\Controller\Factory\ItauControllerFactory;
use Boleto\Controller\Factory\SantanderControllerFactory;
use Boleto\Controller\Factory\SicobControllerFactory;
use Boleto\Controller\Factory\UnicredControllerFactory;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
            'bb' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/bb[/:action]',
                    'defaults' => [
                        'controller'    => Controller\BbController::class,
                        'action'        => 'bb',
                    ],
                ],
            ],
            'unicred' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/unicred[/:action]',
                    'defaults' => [
                        'controller'    => Controller\UnicredCotroller::class,
                        'action'        => 'unicred',
                    ],
                ],
            ],
            'bradesco' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/bradesco[/:action]',
                    'defaults' => [
                        'controller'    => Controller\BradescoController::class,
                        'action'        => 'bradesco',
                    ],
                ],
            ],
            'itau' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/itau[/:action]',
                    'defaults' => [
                        'controller'    => Controller\ItauController::class,
                        'action'        => 'itau',
                    ],
                ],
            ],
            'santander' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/santander[/:action]',
                    'defaults' => [
                        'controller'    => Controller\SantanderController::class,
                        'action'        => 'santander',
                    ],
                ],
            ],
            'brb' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/brb[/:action]',
                    'defaults' => [
                        'controller'    => Controller\BrbController::class,
                        'action'        => 'brb',
                    ],
                ],
            ],
            'caixa' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/caixa[/:action]',
                    'defaults' => [
                        'controller'    => Controller\CaixaController::class,
                        'action'        => 'caixa',
                    ],
                ],
            ],
            'sicob' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/sicob[/:action]',
                    'defaults' => [
                        'controller'    => Controller\SicobController::class,
                        'action'        => 'sicob',
                    ],
                ],
            ],
        ],
    ],
    'controllers' => [
        'factories' => [
            Controller\BbController::class => BbControllerFactory::class,
            Controller\UnicredCotroller::class => UnicredControllerFactory::class,
            Controller\BradescoController::class => BradescoControllerFactory::class,
            Controller\ItauController::class => ItauControllerFactory::class,
            Controller\SantanderController::class => SantanderControllerFactory::class,
            Controller\BrbController::class => BrbControllerFactory::class,
            Controller\CaixaController::class => CaixaControllerFactory::class,
            Controller\SicobController::class => SicobControllerFactory::class,

        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
