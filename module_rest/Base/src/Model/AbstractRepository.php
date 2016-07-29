<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 21/07/2016
 * Time: 09:03
 */

namespace Base\Model;


use Zend\Db\Adapter\Exception\InvalidQueryException;
use Zend\Db\TableGateway\TableGateway;
use Zend\Validator\Digits;


abstract class AbstractRepository{

    const ERROR = 'danger';
    const SUCCESS = 'success';
    const INFO = 'info';

    /**
     * @var $tableGateway TableGateway
     */
    protected $tableGateway;

    /**
    * @var $data Result
    */
    protected $data;

    abstract  function __construct(TableGateway $tableGateway);

    public function getTable()
    {
        return $this->tableGateway->getTable();
    }

    public function select($where = null)
    {
        $this->setData();
        $data=$this->tableGateway->select($where);
        if($data->count()):
            foreach($data as $o){
                $datas[]=$o->toArray();
            }
        $this->data->setData($datas);
        $this->data->setClass(self::SUCCESS);
        $this->data->setResult(TRUE);
        $this->data->setError("SELEÇÃO REALIZADA COM SUCESSO");
        endif;
        return $this->data;
    }

    /**
     * Retorna um registro com base no id
     * @param $id do registro
     * @param bool $object se true retorna um object AbstractModel se false um array
     * @return array|\ArrayObject|null
     */
    public function find($id,$object=true)
    {
        $this->setData();
        $data=$this->tableGateway->select(['id'=>$id]);
        if($data->count()):
            if($object):
                $this->data->setData($data->current());
            else:
                $this->data->setData($data->current()->toArray());
            endif;
            $this->data->setResult(TRUE);
            $this->data->setClass(self::SUCCESS);
            return $this->data;
        endif;
        $this->data->setClass(self::INFO);
        $this->data->setError("NEMHUM RESULTADO FOI ENCOTADO PARA A SU PESQUISA");
        return $this->data;
    }

    /**
     * Consulta registro passnaddo um array com um ou mais parametro(s)
     * @param array $param
     * @return type object table bd
     */
    public function findBy(array $param) {
        $resultSelect = $this->tableGateway->select($param);
        return $resultSelect;
    }

    /**
     * Consulta registro passnaddo um array com um ou mais parametro(s)
     * @param array $param
     * @return type um object table bd
     */
    public function findOneBy(array $param, $object=true) {

        $this->setData();
        $data = $this->tableGateway->select($param);
        if($data->count()):
            if($object):
                $this->data->setData($data->current());
            else:
                $this->data->setData($data->current()->toArray());
            endif;
        return $this->data;
        endif;
        $this->data->setClass(self::INFO);
        $this->data->setError("NEMHUM RESULTADO FOI ENCOTADO PARA A SU PESQUISA");
        return $this->data;
    }

    /**
     * Inserir um registro passando uma model como paramentro
     * @param AbstractModel $set
     * @return bool|null
     */
    public function insert(AbstractModel $set)
    {
        $this->setData();
        try {
            $set->setCodigo($this->getMax('codigo'));
            if ($this->tableGateway->insert($set->toArray())):
                $this->find($this->tableGateway->getLastInsertValue());
                $this->data->setLastInsert( $this->data->getData());
                $this->data->setError("O REGISTRO [ <b>{$set->getTitle()}</b> ] FOI SALVO COM SUCESSO!");
                $this->data->setResult(TRUE);
                $this->data->setClass(self::SUCCESS);
                return $this->data;
            endif;
            $this->data->setError("Nao Foi Possivel Finalizar a Operação!");
            $this->data->setResult(FALSE);
            $this->data->setClass(self::ERROR);
        } catch (InvalidQueryException $exc) {
            $this->data->setError(sprintf("ERROR: %s - %s", $exc->getCode(), $exc->getMessage()));
            $this->data->setResult(FALSE);
            $this->data->setClass(self::ERROR);
        }
        return $this->data;


    }

    /**
     * Atualiza um registro passando uma model como paramentro
     * @param AbstractModel $set
     * @param null $where Usado caso queira usar um parametro diferente do id
     * @return bool
     */
    public function update(AbstractModel $set, $where = null)
    {
        $this->setData();
        $result=false;
        try {
            $oldData = $this->find($set->getId());
            if ($oldData) {
                if($where):
                    $result = $this->tableGateway->update($set->toArray(), [$where]);
                else:
                    $result = $this->tableGateway->update($set->toArray(), ['id' => $set->getId()]);
                endif;

                if ($result) {
                    $this->find($set->getId(),false);
                    $this->data->setError("O REGISTRO [ <b>{$set->getTitle()}</b> ] FOI ATUALIZADO COM SUCESSO!");
                    $this->data->setLastInsert($this->data->getData());
                    $this->data->setClass(self::SUCCESS);
                    $this->data->setResult(TRUE);
                } else {
                    $this->data->setResult(FALSE);
                    $this->data->setClass(self::ERROR);
                    $this->data->setError("NÃO FOI POSSIVEL CONCLUIR A SUA SOLISITAÇÃO, NENHUMA ALTERAÇÃO FOI DETECTADA NO REGISTRO [ <b>{$set->getTitle()}</b> ]!");
                }
                return $this->data;
            }
            $this->data->setError("NÃO FOI POSSIVEL CONCLUIR A SUA SOLISITAÇÃO, POR QUE NENHUM REGISTRO CORRESPONDENTE FOI ENCONTRADO!!");
            $this->data->setResult(FALSE);
            $this->data->setClass(self::ERROR);
        } catch (InvalidQueryException $exc) {
            $this->data->setError(sprintf("ERROR: %s - %s", $exc->getCode(), $exc->getMessage()));
            $this->data->setResult(FALSE);
            $this->data->setClass(self::ERROR);
        }
        return $this->data;

    }

    /**
     * Excluir um registro do banco passando uma comdição array ou um id como parametro
     * @param $where
     * @return bool
     */
    public function delete($where)
    {
        $this->setData();
        $result=false;
        try {
            $filter=new Digits();
            if($filter->isValid($where)):
                $oldData = $this->find($where);
                if ($oldData):
                    $result = $this->tableGateway->delete(['id' => $oldData->getId()]);
                endif;
           else:
                $oldData = $this->findOneBy($where);
                if ($oldData):
                    $result = $this->tableGateway->delete($where);
                endif;
            endif;
               if ($result) {
                   $this->data->setResult(TRUE);
                   $this->data->setError("O REGISTRO [ <b>{$oldData->getTitle()}</b> ] FOI EXCLUIDO COM SUCESSO!");
                   $this->data->setClass(self::SUCCESS);
                    $this->data->setLastInsert(TRUE);
                    return $this->data;
                }

            $this->data->setError("NÃO FOI POSSIVEL CONCLUIR A SUA SOLISITAÇÃO, POR QUE NENHUM REGISTRO CORRESPONDENTE FOI ENCONTRADO!!");
            $this->data->setResult(FALSE);
            $this->data->setClass(self::ERROR);
            return $this->data;
        } catch (InvalidQueryException $exc) {
            $this->data->setError(sprintf("ERROR: %s - %s", $exc->getCode(), $exc->getMessage()));
            $this->data->setResult(FALSE);
            $this->data->setClass(self::ERROR);
            return $this->data;
        }
    }
    //    FUNÇÕES EXTRAS
    public function getMax($id) {
        $select = $this->tableGateway->getSql()->select();
        $select->columns(array('maxId' => new \Zend\Db\Sql\Expression("MAX({$id})")));
        $query = $this->tableGateway->getSql()->prepareStatementForSqlObject($select);
        $rowset = $query->execute();
        $row = $rowset->current();
        if (!$row) {
            $row['maxId'] = 0;
        }
        return $row['maxId'] + 1;
    }

    /**
     * @return AbstractModel
     */
    public function getData()
    {

        return $this->data;
    }

    /**
     * @param Result $data
     */
    public function setData()
    {
        $this->data=new Result();
        $this->data->setTable($this->getTable());
        return $this;
    }





}