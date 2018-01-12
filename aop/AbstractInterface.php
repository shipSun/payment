<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/1/12
 * Time: 16:39
 */

namespace aop;

abstract class AbstractInterface
{
    protected $client;
    protected $request;
    protected $reponse;

    public function setClient($client)
    {
        $this->client = $client;
    }

    public function setRequest($request){

    }
    public function setReponse($reponse){

    }
    public function execute(array $data){
        $jsonData = json_encode($data);
        $this->getRequest()->setBizContent($jsonData);
        $result = $this->client->execute( $this->getRequest());
        return $this->getResponse($result);
    }

    protected function getResponse($result){
        $this->reponse->parse($result);
        //$responseNode = str_replace(".", "_", $this->getRequest()->getApiMethodName()) . "_response";
        //return $result->$responseNode;
    }
    abstract protected function getRequest();
}