<?php
namespace Lib;
class Response{
    private static $codes = [];
    private static $code;
    private static $data = [];
    public static function setResponse($code = null,$data = null){
        header('Content-Type: application/json');
        if($code == 404){
            $data = ['success'=>false,"data"=>$data];
            self::setData($data);
            echo self::getJSONData($data);
            include 'response/codes/404.json';
        } 
        if($code == 200){
            echo self::getJSONData($data);
            include 'response/content/ajax.json';
        }
        http_response_code($code);
    }

    public static function setData($data = null){
        self::$data = $data;
    }

    public static function getJSONData($data){
        return json_encode($data);
    }
}
