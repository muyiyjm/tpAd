<?php
namespace app\admin\controller;

use think\Controller;
use think\Request;

class Index extends Controller
{
    public function index()
    {
        $this->assign([
            'title'=>'易腾网络',
            'name'  => 'ThinkPHP',
            'email' => 'thinkphp@qq.com'
        ]);

        return $this->fetch();
    }
    public function welcome()
    {
        $this->assign([
            'title'=>'易腾网络',
            'name'  => 'ThinkPHP',
            'email' => 'thinkphp@qq.com'
        ]);

        return $this->fetch('welcome');
    }

}
