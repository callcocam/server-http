<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Base\Controller;

use Interop\Container\ContainerInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

abstract class AbstractController extends AbstractActionController
{
    protected $container;
    protected $identity;
    protected $table;
    protected $model;
    protected $route;
    protected $data;
    protected $filter;
    protected $action;

    abstract  function __construct(ContainerInterface $container);

    /**
     * @return mixed
     */
    public function getData($param="")
    {
        if($this->params()->fromPost()):
            $this->data=array_merge_recursive($this->params()->fromPost(),$this->params()->fromFiles());
            if(!empty($param)):
                return $this->data[$param];
            endif;
        endif;
        return $this->data;
    }

    /**
     * @return mixed
     */
    public function getFilter()
    {
        return $this->container->get($this->filter);
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->container->get($this->model);
    }

    /**
     * @return mixed
     */
    public function getTable()
    {
        return $this->container->get($this->table);
    }

    /**
     * @return mixed
     */
    public function getIdentity()
    {
        return $this->container->get($this->identity);
    }

    public function indexAction()
    {
        if($this->table):
            $this->data=$this->getTable()->select(['state'=>'0']);
            return new JsonModel($this->data->toArray());
        endif;
        return new JsonModel(['result'=>false,'messages'=>'','data'=>$this->data]);
    }

    public function createAction()
    {

        return new JsonModel(['result'=>true,'messages'=>'','data'=>$this->data]);
    }

    public function updateAction()
    {

        return new JsonModel(['result'=>true,'messages'=>'','data'=>$this->data]);
    }

    public function deleteAction()
    {

        return new JsonModel(['result'=>true,'messages'=>'','data'=>$this->data]);
    }


}
