<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 15:21
 */

namespace Impostos\Controller;


use Base\Controller\AbstractController;
use Impostos\Model\Cofins\Cofins;
use Impostos\Model\Cofins\CofinsRepository;
use Interop\Container\ContainerInterface;

class CofinsController extends AbstractController{

    function __construct(ContainerInterface $container)
    {
        $this->container=$container;
        $this->table=CofinsRepository::class;
        $this->model=Cofins::class;
    }
}