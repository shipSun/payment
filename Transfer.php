<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/1/12
 * Time: 14:29
 */
use request\alipay\AlipayFundTransToaccountTransferRequest;
use client\alipay\Client;
class Transfer{
    protected $client;
    protected $request;

    public function __construct($config)
    {
        $this->client = new Client();
        foreach($config as $key=>$val){
            $this->client->$key = $val;
        }
    }

    public function execute( array $data){
        $jsonData = json_encode($data);
        $this->getRequest()->setBizContent($jsonData);
        return $this->client->execute( $this->getRequest());
    }
    protected function getResponse($result){
        $responseNode = str_replace(".", "_", $this->getRequest()->getApiMethodName()) . "_response";
        return $result->$responseNode;
    }
    protected function getRequest(){
        if($this->request){
            $this->request = new AlipayFundTransToaccountTransferRequest();
        }
        return $this->request;
    }
}