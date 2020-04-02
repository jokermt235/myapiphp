<?php
use Lib\Controller;
use Lib\Request;
use lib\Model;
class QuestionsController extends Controller{
    public function index(){
        $result = [];      
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = json_decode(file_get_contents('php://input'),true);
            $count = 0;
            foreach($data as $row){
                $answers = $row['answers'];
                $count += $this->getPoint($answers);
            }
            $range = "средняя";
            if($count < 10){
                $range = "очень низкая";
            }
            if($count > 10 && $count < 30){
                $range = "низкая";
            }
            if($count > 30 && $count < 50){
                $range = "средняя";
            }
            if($count > 50 && $count < 70){
                $range = "средняя";
            }
            if($count > 70 && $count < 100){
                $range = "высокая";
            }
            return ["points"=>$count,"range"=>$range];
        }else{

            Model::init();

            $result = Model::find();

            foreach($result as &$row){
                $row['answers'] = json_decode($row['answers'],true);
            }
        }

        return $result;
    }

    private function getPoint($answers){
        foreach($answers as $answer){
            if($answer['checked'] == true){
                return $answer['point'];
            }
        }

        return 0;
    }
}
