<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/1/12
 * Time: 15:55
 */
function autoLoad($class){
    $file = $class.'.php';
    if(!class_exists($class,false)){
        require_once $file;
    }
}
spl_autoload_register("autoLoad");