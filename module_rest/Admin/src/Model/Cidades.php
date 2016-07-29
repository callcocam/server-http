<?php
/**
 * Created by PhpStorm.
 * User: Call
 * Date: 26/07/2016
 * Time: 08:53
 */

namespace Admin\Model;


use Base\Model\AbstractModel;

class Cidades extends AbstractModel{

    protected $title;
    protected $uf;
    protected $ibge;
    protected $cep;
    protected $cpais;
    protected $xpais;
    protected $cuf;

    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return mixed
     */
    public function getCpais()
    {
        return $this->cpais;
    }

    /**
     * @param mixed $cpais
     */
    public function setCpais($cpais)
    {
        $this->cpais = $cpais;
    }

    /**
     * @return mixed
     */
    public function getCuf()
    {
        return $this->cuf;
    }

    /**
     * @param mixed $cuf
     */
    public function setCuf($cuf)
    {
        $this->cuf = $cuf;
    }

    /**
     * @return mixed
     */
    public function getIbge()
    {
        return $this->ibge;
    }

    /**
     * @param mixed $ibge
     */
    public function setIbge($ibge)
    {
        $this->ibge = $ibge;
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

    /**
     * @return mixed
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param mixed $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @return mixed
     */
    public function getXpais()
    {
        return $this->xpais;
    }

    /**
     * @param mixed $xpais
     */
    public function setXpais($xpais)
    {
        $this->xpais = $xpais;
    }

} 