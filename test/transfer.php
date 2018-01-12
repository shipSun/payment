<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/1/12
 * Time: 15:48
 */
include '../auto.php';
use aop\Transfer;
$bizContent = [];
$config = [];
$transfet = new Transfer();
$client = new client\alipay\Client();
$transfet->setClient($client);
$data = $transfet->execute($bizContent);
var_dump($data);