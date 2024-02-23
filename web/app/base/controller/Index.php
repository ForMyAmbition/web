<?php

namespace app\base\controller;

use app\BaseController;

class Index extends BaseController
{
    public function index()
    {
        $data = [];
        for($i=1;$i<=10;$i++){
            $data[] = [
                'name' =>$i,
                'age' =>$i+10
            ];
        }
        $ret = [
          'data'=>[
            'list'=>[
                'data'=> $data,
                'page'=>10,
                'size'=>10,
                'now_page'=>1,
                'last_page'=>1,
                'totle' =>40
            ]
          ],
            'status'=>200
        ];
        return $ret;
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }
}
