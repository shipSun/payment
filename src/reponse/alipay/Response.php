<?php
/**
 * Created by PhpStorm.
 * User: shipSun
 * Date: 2018/1/15
 * Time: 12:54
 */

namespace payment\reponse\alipay;


class Response
{
    public function parse($result, $request){
        $responseNode = str_replace(".", "_", $request->getApiMethodName()) . "_response";
        return $result->$responseNode;
    }

}