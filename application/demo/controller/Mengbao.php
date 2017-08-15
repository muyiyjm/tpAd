<?php

namespace app\demo\controller;

use think\Controller;
use think\Request;
use think\Db;
use app\demo\model\Testdate as TestdateModel;
class Mengbao extends Controller
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
    public function index()
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
    public function rule()
    {
        //
        $this->assign([
            'title'=>'最美家乡首页',

        ]);

        return $this->fetch('rule');

    }
    public function reg()
    {
        $this->assign([
            'title'=>'最美家乡首页',

        ]);

        return $this->fetch('reg');

    }
    public function prize()
    {
        $this->assign([
            'title'=>'最美家乡首页',

        ]);

        return $this->fetch('prize');

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
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
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
