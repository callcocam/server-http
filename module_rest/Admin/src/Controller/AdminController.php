<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 20/07/2016
 * Time: 22:28
 */

namespace Admin\Controller;


use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;

class AdminController extends AbstractController {

    function __construct(ContainerInterface $container)
    {
        $this->container=$container;
    }


}