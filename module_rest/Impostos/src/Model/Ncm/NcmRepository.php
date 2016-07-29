<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 14:59
 */

namespace Impostos\Model\Ncm;


use Base\Model\AbstractRepository;
use Zend\Db\TableGateway\TableGateway;

class NcmRepository extends AbstractRepository {

    function __construct(TableGateway $tableGateway)
    {
       $this->tableGateway=$tableGateway;
    }
}