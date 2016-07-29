<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 15:20
 */

namespace Impostos\Controller;


use Base\Controller\AbstractController;
use Impostos\Model\Cnae\Cnae;
use Impostos\Model\Cnae\CnaeRepository;
use Interop\Container\ContainerInterface;

class CnaeController extends AbstractController{

    function __construct(ContainerInterface $container)
    {
        $this->container=$container;
        $this->table=CnaeRepository::class;
        $this->model=Cnae::class;
    }
}