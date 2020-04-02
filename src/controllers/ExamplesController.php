<?php
use Lib\Controller;
use Lib\Request;
use lib\Model;
class ExamplesController extends Controller{
    public function index(){
        $json = '[{"id":"1","text":"\u0423 \u0432\u0430\u0441 \u0435\u0441\u0442\u044c \u043f\u0440\u043e\u0431\u043b\u0435\u043c\u044b \u0441 \u0438\u043c\u043c\u0443\u043d\u0438\u0442\u0435\u0442\u043e\u043c","answers":[{"text":"\u0434\u0430","point":12,"checked":true},{"text":"\u043d\u0435\u0442","point":0,"checked":false}]},{"id":"2","text":"\u0423 \u0432\u0430\u0441 \u0435\u0441\u0442\u044c \u0445\u0440\u043e\u043d\u0438\u0447\u0435\u0441\u043a\u0438\u0435 \u0437\u0430\u0431\u043e\u043b\u0435\u0432\u0430\u043d\u0438\u044f","answers":[{"text":"\u0434\u0430","point":12,"cheked":false},{"text":"\u043d\u0435\u0442","point":0,"checked":false}]},{"id":"3","text":"\u041a\u043e\u043b\u0438\u0447\u0435\u0441\u0442\u0432\u043e \u043b\u044e\u0434\u0435\u0439 \u0441 \u043a\u043e\u0442\u043e\u0440\u044b\u043c\u0438 \u043a\u043e\u043d\u0442\u0430\u043a\u0442\u0438\u0440\u0443\u0435\u0442\u0435 \u0432 \u0434\u0435\u043d\u044c","answers":[{"text":"0","point":0,"checked":false},{"text":"1-5","point":10,"checked":false},{"text":"5-10","point":20,"checked":false},{"text":"10+","point":25,"checked":true}]},{"id":"4","text":"\u041a\u043e\u043d\u0442\u0430\u043a\u0442\u0438\u0440\u0443\u044e\u0442 \u043b\u0438 \u0431\u043b\u0438\u0437\u0441\u043a\u0438\u0435 \u0441 \u0434\u0440\u0443\u0433\u0438\u043c\u0438 \u043b\u044e\u0434\u044c\u043c\u0438","answers":[{"text":"\u0434\u0430","point":25,"checked":false},{"text":"\u043d\u0435\u0442","point":0,"checked":false}]},{"id":"5","text":"\u0418\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0435\u0442\u0435 \u043b\u0438 \u0432\u044b \u0441\u0440\u0435\u0434\u0441\u0442\u0432\u0430 \u0437\u0430\u0449\u0438\u0442\u044b \u043f\u0440\u0438 \u0432\u044b\u0445\u043e\u0434\u0435 \u043d\u0430 \u0443\u043b\u0438\u0446\u0443","answers":[{"text":"\u0434\u0430","point":13,"checked":false},{"text":"\u043d\u0435\u0442","point":0,"checked":false}]},{"id":"6","text":"\u0412\u044b \u0441\u043e\u0431\u043b\u044e\u0434\u0430\u0435\u0442\u0435 \u043a\u0430\u0440\u0430\u043d\u0442\u0438\u043d","answers":[{"text":"\u0434\u0430","point":13,"checked":false},{"text":"\u043d\u0435\u0442","point":0,"checked":false}]}]';

        return json_decode($json,true);
    }
}