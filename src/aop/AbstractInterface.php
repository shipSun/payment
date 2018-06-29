<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/1/12
 * Time: 16:39
 */

namespace payment\aop;

abstract class AbstractInterface
{
    public $client;
    public $request;
    public $reponse;

    public function client($payment, $config){
        $this->init($payment, $config);
        return $this;
    }
    public function execute( array $data)
    {
        return $this->client->execute( $data);
    }
    public function pageExecute( array $data)
    {
        return $this->client->pageExecute( $data);
    }
    public function sdkExecute( array $data){
        return $this->client->sdkExecute($data);
    }
    protected function init($payment, $config){
        $clientClass =  $this->getClientClass($payment);
        $this->client = new $clientClass();
        foreach($config as $key=>$val){
            $this->client->$key = $val;
        }
        $requestClass = $this->getRequestClass($payment);
        $this->request = new $requestClass();

        $reponseClass = $this->getReponseClass($payment);
        $this->reponse = new $reponseClass();

        $this->client->setRequest($this->request);
        $this->client->setReponse($this->reponse);
    }
    protected function getClientClass($payment){
        return '\payment\client\\'.$payment.'\Client';
    }
    protected function getRequestClass($payment){
        return '\payment\request\\'.$payment.'\\'.$this->getApiName();
    }
    protected function getReponseClass($payment){
        return '\payment\reponse\\'.$payment.'\Response';
    }
    abstract protected function getApiName();
}