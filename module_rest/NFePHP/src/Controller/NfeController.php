<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 21/07/2016
 * Time: 01:06
 */

namespace NFePHP\Controller;


use Base\Controller\AbstractController;
use Interop\Container\ContainerInterface;

class NfeController extends AbstractController {

    function __construct(ContainerInterface $container)
    {
        $this->container=$container;
    }
}