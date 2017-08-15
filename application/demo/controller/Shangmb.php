<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/26
 * Time: 9:25
 */

namespace app\demo\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\demo\model\Testdate as TestdateModel;
use think\Paginator;

use think\File;
use OSS\OssClient;
use OSS\Core\OssException;
use think\helper\Time;

class Shangmb extends Controller
{

    /**
     * @return View
     */
    public function index($p=1)
    {
        //
        $list= Db::table('testdate')->where('status',1)->paginate(4);

// 把分页数据赋值给模板变量list
// 获取分页显示
        $this->assign([
            'title'=>'最美家乡首页',
            'list'=>$list
        ]);

        return $this->fetch('index');
    }
    public function show($id)
    {
        //
        $show=TestdateModel::get($id);

        $pics=$show->pics()->where('bid',$id)->select();
        $this->assign([
            'show'=>$show,
            'pics'=>$pics
        ]);
        return $this->fetch('show');



    }


    public function reg()
    {

        return $this->fetch('reg');
    }

    public function prize()
    {

        return $this->fetch('prize');
    }
    public function explain()
    {
        //
        return $this->fetch('explain');
    }


}