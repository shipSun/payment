<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/1/12
 * Time: 15:48
 */
include '../Transfer.php';
$bizContent = [];
$config = [];
$transfet = new \Transfer($config);
$data = $transfet->execute($bizContent);
var_dump($data);