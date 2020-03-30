<?php
namespace Lib;
class Request{
    private  $data = [];
    public function getData(){
    }

    public function isPost(){
    }

    public static function isPut(){
    }

    public function setData($data = null){
        self::$data = $data;
    }

    public static function getJSONData($data){
        return json_encode($data);
    }
}
