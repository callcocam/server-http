<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 26/07/2016
 * Time: 09:01
 */

namespace Admin\Controller;


use Admin\Model\Cidades;
use Admin\Model\CidadesRepository;
use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;

class CidadesController extends AbstractController {

    function __construct(ContainerInterface $container)
    {
        $this->container=$container;
        $this->table=CidadesRepository::class;
        $this->model=Cidades::class;
    }
}