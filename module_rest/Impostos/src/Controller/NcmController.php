<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 15:23
 */

namespace Impostos\Controller;


use Base\Controller\AbstractController;
use Impostos\Model\Ncm\Ncm;
use Impostos\Model\Ncm\NcmRepository;
use Interop\Container\ContainerInterface;

class NcmController extends AbstractController {

    function __construct(ContainerInterface $container)
    {
        $this->container=$container;
        $this->table=NcmRepository::class;
        $this->model=Ncm::class;
    }
}