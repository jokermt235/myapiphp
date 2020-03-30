<?php
namespace Lib;
class Controller{
    protected $request;
    public function setRequest($request){
        $this->request = $request;
    }
}
