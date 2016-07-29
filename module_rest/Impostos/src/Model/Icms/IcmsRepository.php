<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 14:53
 */

namespace Impostos\Model\Icms;


use Base\Model\AbstractRepository;
use Zend\Db\TableGateway\TableGateway;

class IcmsRepository extends AbstractRepository{

    function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway=$tableGateway;
    }
}