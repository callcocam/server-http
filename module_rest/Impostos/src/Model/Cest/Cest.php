<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 28/07/2016
 * Time: 14:34
 */

namespace Impostos\Model\Cest;


use Base\Model\AbstractModel;

class Cest extends AbstractModel {

    protected $title;
    protected $ncm_id;

    /**
     * @return mixed
     */
    public function getNcmId()
    {
        return $this->ncm_id;
    }

    /**
     * @param mixed $ncm_id
     */
    public function setNcmId($ncm_id)
    {
        $this->ncm_id = $ncm_id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }


} 