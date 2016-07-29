<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 14:48
 */

namespace Impostos\Model\Cofins;


use Base\Model\AbstractRepository;
use Zend\Db\TableGateway\TableGateway;

class CofinsRepository extends AbstractRepository {

    function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway=$tableGateway;
    }
}