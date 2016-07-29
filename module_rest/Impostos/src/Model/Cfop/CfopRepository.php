<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 14:39
 */

namespace Impostos\Model\Cfop;


use Base\Model\AbstractRepository;
use Zend\Db\TableGateway\TableGateway;

class CfopRepository extends AbstractRepository {

    function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway=$tableGateway;
    }
}