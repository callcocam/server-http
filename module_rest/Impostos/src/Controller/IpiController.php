<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 15:23
 */

namespace Impostos\Controller;


use Base\Controller\AbstractController;
use Impostos\Model\Ipi\Ipi;
use Impostos\Model\Ipi\IpiRepository;
use Interop\Container\ContainerInterface;

class IpiController extends AbstractController{

    function __construct(ContainerInterface $container)
    {
        $this->container=$container;
        $this->table=IpiRepository::class;
        $this->model=Ipi::class;
    }
}