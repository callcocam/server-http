<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 15:03
 */

namespace Impostos\Model\Pis;


use Base\Model\AbstractRepository;
use Zend\Db\TableGateway\TableGateway;

class PisRepository extends AbstractRepository {

    function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway=$tableGateway;
    }
}