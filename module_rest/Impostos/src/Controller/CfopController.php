<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 15:19
 */

namespace Impostos\Controller;


use Base\Controller\AbstractController;
use Impostos\Model\Cfop\Cfop;
use Impostos\Model\Cfop\CfopRepository;
use Interop\Container\ContainerInterface;

class CfopController extends AbstractController{

    function __construct(ContainerInterface $container)
    {
        $this->container=$container;
        $this->table=CfopRepository::class;
        $this->model=Cfop::class;
    }
}