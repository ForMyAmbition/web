<?php

namespace app\base\controller;

use app\base\BaseController;

class Index extends BaseController
{
    public function index()
    {
        return '0002131231300';
    }

    public function hello($name = 'ThinkPHP8')
    {
        return 'hello,' . $name;
    }
}
