<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/1/12
 * Time: 14:29
 */
namespace payment\aop;


class Transfer extends AbstractInterface {
    protected function getApiName(){
        return 'TradeAppPay';
    }
}