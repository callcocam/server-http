<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 26/07/2016
 * Time: 08:55
 */

namespace Admin\Model;


use Base\Model\AbstractRepository;
use Zend\Db\TableGateway\TableGateway;

class CidadesRepository extends AbstractRepository {

    function __construct(TableGateway $tableGateway)
    {
       $this->tableGateway=$tableGateway;
    }
}