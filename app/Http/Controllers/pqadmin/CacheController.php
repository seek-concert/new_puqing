<?php

namespace App\Http\Controllers\pqadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
Class CacheController extends BaseController
{
        /*
    |--------------------------------------------------------------------------
    | 更新缓存控制器
    |--------------------------------------------------------------------------
    |
    | 用户管理客户信息
    | function get_cache     更新缓存
    |
    |--------------------------------------------------------------------------
    |
    | Author:1285653363@qq.com    Leimon  
    |
    */

    public function __construct()
    {
        parent::__construct();
    }

    public function get_cache(){
        //网址设置缓存填充
        $web_info = DB::table('web')->where(['id'=>1])->first();
        if($web_info){
            foreach ($web_info as $key => $value) {
                //配置写入永久缓存
                Cache::forever($key, $value);
                echo '"'.$key.'"值缓存成功</br>';
            }
        }
        //联系我们设置缓存充填
        $contact_info = DB::table('contact')->pluck( 'value','key');
        if($contact_info){
            foreach ($contact_info as $key => $value) {
                 //配置写入永久缓存
                 Cache::forever($key, $value);
                 echo '"'.$key.'"值缓存成功</br>';
            }
        }
    }
}