<?php

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

class Hometown extends Controller
{


    public function _initialize(){

        $request = \think\Request::instance();

        $action_name=$request->action();

        $this->assign('action_name',$action_name);

    }
    /**
     * 显示资源列表
     *
     * @return \think\Response
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

//return json($list);
       return $this->fetch('index');
    }
    public function rank()
    {
        //
        $list=TestdateModel::all();
        $this->assign([
            'title'=>'最美家乡排行',
            'list'=>$list
        ]);


        return $this->fetch('rank');
    }
    public function reg()
    {

        return $this->fetch('reg');
    }
    public function prize()
    {

        return $this->fetch('prize');
    }
    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
//        list($start, $end) = Time::today();
//        $sc=input('request.username');
//        $sb= input('request.desc');

        $file = request()->file('file');


        // 移动到框架应用根目录/public/uploads/ 目录下









    }
    public function msg()
    {

        return $this->fetch('msg');
    }
    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
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

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //




    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
