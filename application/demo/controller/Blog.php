<?php

namespace app\demo\controller;

use think\Controller;
use think\Request;
use app\demo\model\Testdate as TestdateModel;
use app\demo\model\Pics as PicsModel;
class Blog extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */


    /**
     * @return Request
     */
    public function test()
    {
        $ds=TestdateModel::all();
        return json($ds);

    }
    public function index()
    {
      $this->assign([
        'name'  => 'ThinkPHP',
            'email' => 'thinkphp@qq.com'
        ]);

        return  $this->fetch('index');
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
        return $this->fetch('reg');
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
        $User = new User; //实例化User对象
        $result = $User->save($data);
        if($result){
            //设置成功后跳转页面的地址，默认的返回页面是$_SERVER['HTTP_REFERER']
            $this->success('新增成功', 'User/list');
        } else {
            //错误页面的默认跳转页面是返回前一页，通常不需要设置
            $this->error('新增失败');
        }
    }
    public function addBook()
    {
        $blog               = TestdateModel::get(1);
//        $pic               = new Pics;
//        $pic->picurl        = 'ThinkPHP5快速入门';

        $blog->pics()->save(['picurl'=>'test']);
        return '添加Book成功';
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
