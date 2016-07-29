<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 14:35
 */

namespace Impostos\Model\Cest;


use Base\Model\AbstractRepository;
use Zend\Db\TableGateway\TableGateway;

class CestRepository extends AbstractRepository {

    function __construct(TableGateway $tableGateway)
    {
       $this->tableGateway=$tableGateway;
    }
}