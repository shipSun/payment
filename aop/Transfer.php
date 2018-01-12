<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/1/12
 * Time: 14:29
 */
namespace aop;


class Transfer extends AbstractInterface {

    protected function getRequest(){
        if(!$this->request){
            $this->request = new AlipayFundTransToaccountTransferRequest();
        }
        return $this->request;
    }

}