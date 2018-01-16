<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/1/16
 * Time: 12:31
 */

namespace payment\aop;


use payment\aop\AbstractInterface;

class TransferQuery extends AbstractInterface
{
    protected function getApiName()
    {
        return 'TransferQuery';
    }
}