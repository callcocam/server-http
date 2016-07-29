<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 14:57
 */

namespace Impostos\Model\Ipi;


use Base\Model\AbstractRepository;
use Zend\Db\TableGateway\TableGateway;

class IpiRepository extends AbstractRepository {

    function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway=$tableGateway;
    }
}