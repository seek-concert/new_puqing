<?php

namespace App\Http\Controllers\pqadmin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use OSS\OssClient;

Class BaseController extends Controller
{
    public function __construct()
    {
        $this->request = request();

        // 验证是否登录
        $this->middleware(function ($request, $next) {
            if (!\Session::get('username')) {
                Redirect::to('pqadmin/prompt')->with(['message' => '未登录！请登录后再试！', 'url' => '/pqadmin/login', 'jumpTime' => 3, 'status' => 'error'])->send();
            }
            return $next($request);
        });
    }

    /*
     * 文件上传
     */
    public function upload($img,$category){
        $aliyun = config('kindeditor.connections.aliyun');
        $object = $category.'/'.date('YmdHis') . random_int(1, 100000) . '.' . $img->getClientOriginalExtension(); //生成日期+随机数字的文件名 $tmFile->getClientOriginalExtension();获取文件后缀名
        $filePath = $img->getPath() . '/' . $img->getFilename();// 获取临时文件
        $ossClient = new OssClient($aliyun['ak_id'], $aliyun['ak_secret'], $aliyun['end_point']);
        $info = $ossClient->uploadFile($aliyun['bucket'], $object, $filePath); //为了获取上传后的文件信息
        $fileRequestUrl = $info['oss-request-url'];
        return $fileRequestUrl;
    }
}