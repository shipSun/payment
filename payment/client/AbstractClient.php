<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/1/15
 * Time: 13:13
 */

namespace payment\client;


abstract class AbstractClient
{

    abstract public function execute(array $data);
    /**
     * @return mixed
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param mixed $request
     */
    public function setRequest( $request )
    {
        $this->request = $request;
    }

    /**
     * @return mixed
     */
    public function getReponse()
    {
        return $this->reponse;
    }

    /**
     * @param mixed $reponse
     */
    public function setReponse( $reponse )
    {
        $this->reponse = $reponse;
    }
    protected $request;
    protected $reponse;

}