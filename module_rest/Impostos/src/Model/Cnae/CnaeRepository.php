<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 14:44
 */

namespace Impostos\Model\Cnae;


use Base\Model\AbstractRepository;
use Zend\Db\TableGateway\TableGateway;

class CnaeRepository extends AbstractRepository {

    function __construct(TableGateway $tableGateway)
    {
       $this->tableGateway=$tableGateway;
    }
}