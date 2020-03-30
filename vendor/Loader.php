<?php
class Loader {
    public static function autoLoad(){
        self::loadFiles('core');
        self::loadFiles('lib');
    }

    public static function loadFiles($dir){
        $paths = array_diff(scandir(__DIR__.'/'.$dir),[".",".."]);
        foreach($paths as $path){
            require __DIR__.'/'.$dir.'/'.$path;
        }
    }

    public static function loadController($controller){
        $splClass  = dirname(__DIR__).'/src/'.'controllers/'.$controller.'Controller.php';
        require $splClass;
    }

}

