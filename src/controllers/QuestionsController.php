<?php
use Lib\Controller;
use Lib\Request;
class QuestionsController extends Controller{
    public function index(){
        return ["questions"=>"OK"];
    }
}
