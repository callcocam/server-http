<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 15:17
 */

namespace Impostos\Controller;


use Base\Controller\AbstractController;
use Impostos\Model\Cest\Cest;
use Impostos\Model\Cest\CestRepository;
use Interop\Container\ContainerInterface;

class CestController extends AbstractController {

    function __construct(ContainerInterface $container)
    {
        $this->container=$container;
        $this->table=CestRepository::class;
        $this->model=Cest::class;

    }
}