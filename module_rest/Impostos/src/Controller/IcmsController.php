<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 15:22
 */

namespace Impostos\Controller;


use Base\Controller\AbstractController;
use Impostos\Model\Icms\Icms;
use Impostos\Model\Icms\IcmsRepository;
use Interop\Container\ContainerInterface;

class IcmsController extends AbstractController {

    function __construct(ContainerInterface $container)
    {
        $this->container=$container;
        $this->table=IcmsRepository::class;
        $this->model=Icms::class;
    }
}