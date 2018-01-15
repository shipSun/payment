<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/1/12
 * Time: 15:48
 */
include '../../auto.php';
use payment\aop\Transfer;
$bizContent = [];
$config['appId'] = '2016101000651842';
$transfet = new Transfer();

$data = $transfet->client('alipay', $config)->execute($bizContent);

var_dump($data);