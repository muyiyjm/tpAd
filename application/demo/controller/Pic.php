<?php

namespace app\demo\controller;

use think\Controller;
use think\Request;
use Qiniu\Auth;
use Qiniu\Storage\UploadManager;

class Pic extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
        $accessKey = config('ACCESSKEY');
        $secretKey = config('SECRETKEY');
        $auth = new Auth($accessKey, $secretKey);
        // 空间名  https://developer.qiniu.io/kodo/manual/concepts
        $bucket = 'yt-95';
        // 生成上传Token
        $token = $auth->uploadToken($bucket);
        // 构建 UploadManager 对象
        $this->assign([
           'token'=> $token
        ]);
        $uploadMgr = new UploadManager();
        return $this->fetch('');
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
