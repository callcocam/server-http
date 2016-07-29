<?php
namespace Impostos;
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 20/07/2016
 * Time: 22:27
 */


use Impostos\Controller\CestController;
use Impostos\Controller\CfopController;
use Impostos\Controller\CnaeController;
use Impostos\Controller\CofinsController;
use Impostos\Controller\Factory\CestControllerFactory;
use Impostos\Controller\Factory\CfopControllerFactory;
use Impostos\Controller\Factory\CnaeControllerFactory;
use Impostos\Controller\Factory\CofinsControllerFactory;
use Impostos\Controller\Factory\IcmsControllerFactory;
use Impostos\Controller\Factory\IpiControllerFactory;
use Impostos\Controller\Factory\NcmControllerFactory;
use Impostos\Controller\Factory\PisControllerFactory;
use Impostos\Controller\IcmsController;
use Impostos\Controller\IpiController;
use Impostos\Controller\NcmController;
use Impostos\Controller\PisController;
use Zend\Router\Http\Segment;

return [
    'router' => [
        'routes' => [
           'cest' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/cest[/:action][/:id]',
                    'defaults' => [
                        'controller'    => Controller\CestController::class,
                        'action'        => 'index',
                        'id'=>''
                    ],
                ],
            ],
            'cfop' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/cfop[/:action][/:id]',
                    'defaults' => [
                        'controller'    => Controller\CfopController::class,
                        'action'        => 'index',
                        'id'=>''
                    ],
                ],
            ],'cnae' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/cnae[/:action][/:id]',
                    'defaults' => [
                        'controller'    => Controller\CnaeController::class,
                        'action'        => 'index',
                        'id'=>''
                    ],
                ],
            ],'cofins' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/cofins[/:action][/:id]',
                    'defaults' => [
                        'controller'    => Controller\CofinsController::class,
                        'action'        => 'index',
                        'id'=>''
                    ],
                ],
            ],'icms' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/icms[/:action][/:id]',
                    'defaults' => [
                        'controller'    => Controller\IcmsController::class,
                        'action'        => 'index',
                        'id'=>''
                    ],
                ],
            ],'ipi' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/ipi[/:action][/:id]',
                    'defaults' => [
                        'controller'    => Controller\IpiController::class,
                        'action'        => 'index',
                        'id'=>''
                    ],
                ],
            ],'ncm' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/ncm[/:action][/:id]',
                    'defaults' => [
                        'controller'    => Controller\NcmController::class,
                        'action'        => 'index',
                        'id'=>''
                    ],
                ],
            ],'pis' => [
                'type'    => Segment::class,
                'options' => [
                    'route'    => '/pis[/:action][/:id]',
                    'defaults' => [
                        'controller'    => Controller\PisController::class,
                        'action'        => 'index',
                        'id'=>''
                    ],
                ],
            ]
        ],
    ],
    'controllers' => [
        'factories' => [
                        CestController::class=>CestControllerFactory::class,
                        CfopController::class=>CfopControllerFactory::class,
                        CnaeController::class=>CnaeControllerFactory::class,
                        CofinsController::class=>CofinsControllerFactory::class,
                        IcmsController::class=>IcmsControllerFactory::class,
                        IpiController::class=>IpiControllerFactory::class,
                        NcmController::class=>NcmControllerFactory::class,
                        PisController::class=>PisControllerFactory::class,
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            __DIR__ . '/../view',
        ],
    ],
];
