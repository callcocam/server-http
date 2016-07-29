<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 14:13
 */

namespace Impostos;


use Impostos\Model\Cest\Cest;
use Impostos\Model\Cest\CestRepository;
use Impostos\Model\Cest\Factory\CestFactory;
use Impostos\Model\Cest\Factory\CestRepositoryFactory;
use Impostos\Model\Cfop\Cfop;
use Impostos\Model\Cfop\CfopRepository;
use Impostos\Model\Cfop\Factory\CfopFactory;
use Impostos\Model\Cfop\Factory\CfopRepositoryFactory;
use Impostos\Model\Cnae\Cnae;
use Impostos\Model\Cnae\CnaeRepository;
use Impostos\Model\Cnae\Factory\CnaeFactory;
use Impostos\Model\Cnae\Factory\CnaeRepositoryFactory;
use Impostos\Model\Cofins\Cofins;
use Impostos\Model\Cofins\CofinsRepository;
use Impostos\Model\Cofins\Factory\CofinsFactory;
use Impostos\Model\Cofins\Factory\CofinsRepositoryFactory;
use Impostos\Model\Icms\Factory\IcmsFactory;
use Impostos\Model\Icms\Factory\IcmsRepositoryFactory;
use Impostos\Model\Icms\Icms;
use Impostos\Model\Icms\IcmsRepository;
use Impostos\Model\Ipi\Factory\IpiFactory;
use Impostos\Model\Ipi\Factory\IpiRepositoryFactory;
use Impostos\Model\Ipi\Ipi;
use Impostos\Model\Ipi\IpiRepository;
use Impostos\Model\Ncm\Factory\NcmFactory;
use Impostos\Model\Ncm\Factory\NcmRepositoryFactory;
use Impostos\Model\Ncm\Ncm;
use Impostos\Model\Ncm\NcmRepository;
use Impostos\Model\Pis\Factory\PisFactory;
use Impostos\Model\Pis\Factory\PisRepositoryFactory;
use Impostos\Model\Pis\Pis;
use Impostos\Model\Pis\PisRepository;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module implements ConfigProviderInterface,ServiceProviderInterface{

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
                Cest::class=>CestFactory::class,
                CestRepository::class=>CestRepositoryFactory::class,
                CfopRepository::class=>CfopRepositoryFactory::class,
                Cfop::class=>CfopFactory::class,
                Cnae::class=>CnaeFactory::class,
                CnaeRepository::class=>CnaeRepositoryFactory::class,
                Cofins::class=>CofinsFactory::class,
                CofinsRepository::class=>CofinsRepositoryFactory::class,
                Icms::class=>IcmsFactory::class,
                IcmsRepository::class=>IcmsRepositoryFactory::class,
                Ipi::class=>IpiFactory::class,
                IpiRepository::class=>IpiRepositoryFactory::class,
                Ncm::class=>NcmFactory::class,
                NcmRepository::class=>NcmRepositoryFactory::class,
                Pis::class=>PisFactory::class,
                PisRepository::class=>PisRepositoryFactory::class,

            ]
        ];
    }
}