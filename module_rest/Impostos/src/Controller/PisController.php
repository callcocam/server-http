<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 15:24
 */

namespace Impostos\Controller;


use Base\Controller\AbstractController;
use Impostos\Model\Pis\Pis;
use Impostos\Model\Pis\PisRepository;
use Interop\Container\ContainerInterface;

class PisController extends AbstractController {

    function __construct(ContainerInterface $container)
    {
        $this->container=$container;
        $this->table=PisRepository::class;
        $this->model=Pis::class;
    }
}