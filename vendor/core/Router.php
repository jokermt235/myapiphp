<?php
use Lib\Response;
use Lib\Request;

class Router {
    protected static $routes = [];
    protected static $route = [];
    protected static $prefix  = '';
    public static function add($path,$route){
        self::$routes[$path] = $route;
    }

    public static function check($uri){
        if(!self::uriRegistered($uri)){
            Response::setResponse(404,['the route for'=>"$uri does not exists"]);
        }else{
            Loader::loadController(self::$route['controller']);
            $controllerStr = self::$route['controller'].'Controller'; 
            $controller = new $controllerStr();
            if(self::$route['action']){
                try{
                    $action = self::$route['action'];
                    if(!method_exists($controller, $action)){
                        Response::setResponse(404,["Action $action for"=>"$controllerStr does not exists"]);
                    }else{
                        $data = $controller->$action();
                        Response::setResponse(200,["success"=>"true","data"=>$data]);
                    }
                }catch(Exception $e){
                    Response::setResponse(404,['Action for'=>"$controllerStr does not exists"]);
                }
            }
        }
    }

    public static function uriRegistered($uri){
        foreach(self::$routes as $param=>$route){
            if($uri == self::$prefix.'/'.$param){
                self::$route = $route;
                return true;
            }
        }
        return false;
    }

    public static function prefix($_prefix){
        self::$prefix = $_prefix;
    }
}
?>
