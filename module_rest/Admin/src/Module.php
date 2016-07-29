<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 20/07/2016
 * Time: 22:25
 */

namespace Admin;


use Admin\Model\Cidades;
use Admin\Model\CidadesRepository;
use Admin\Model\Factory\CidadesFactory;
use Admin\Model\Factory\CidadesRepositoryFactory;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements ConfigProviderInterface, ServiceProviderInterface{

    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
       return include __DIR__.'/../config/module.config.php';
    }

    /**
     * Expected to return \Zend\ServiceManager\Config object or array to
     * seed such an object.
     *
     * @return array|\Zend\ServiceManager\Config
     */
    public function getServiceConfig()
    {
        return [
            'factories'=>[
               Cidades::class=>CidadesFactory::class,
                CidadesRepository::class=>CidadesRepositoryFactory::class
            ]

        ];
    }
}