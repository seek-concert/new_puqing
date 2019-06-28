<?php

namespace App\Http\Controllers\pqadmin;

use App\Http\Controllers\Controller;


Class PromptController extends Controller
{

    /*
     * 跳转提示页
     */
    public function index(){
        if(!empty(session('message')) && !empty(session('url')) && !empty(session('jumpTime'))){
            $data = [
                'message' => session('message'),        //提示信息
                'url' => session('url'),                //跳转的URL
                'jumpTime' => session('jumpTime'),  //跳转的时间 默认3秒
                'status' => session('status')   //状态 success error warning continue
            ];
        } else {
            $data = [
                'message' => '请勿非法访问！',
                'url' => '/',
                'jumpTime' => 3,
                'status' => 'error'
            ];
        }
        //显示模板及数据
        return view('pqadmin.prompt',compact('data'));
    }

    

}