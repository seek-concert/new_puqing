<?php

namespace App\Http\Controllers\pqadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
Class ContactController extends BaseController
{
        /*
    |--------------------------------------------------------------------------
    | 联系我们设置控制器
    |--------------------------------------------------------------------------
    |
    | 用户管理客户信息
    | function contact_setting     设置联系我们
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

    /*
    * 首页
    *   @Date：2019/3/18
    *   @param before_service_phone string 售前电话
    *   @param before_service_qq string 售前QQ
    *   @param after_service_phone string 售后电话
    *   @param after_service_qq string 售后QQ
    *   @param address string 联系地址
    *   @param post_code string 邮编
    *   @param company_email string 企业邮箱
    */
    public function contact_setting(Request $request)
    {
        if ($request->isMethod('post')) {
            $param = $request->all();
            $sqlmap = [];
            //数据整合
            $sqlmap['before_service_phone'] = $param['before_service_phone'];
            $sqlmap['before_service_qq'] = $param['before_service_qq'];
            $sqlmap['after_service_phone'] = $param['after_service_phone'];
            $sqlmap['after_service_qq'] = $param['after_service_qq'];
            $sqlmap['address'] = $param['address'];
            $sqlmap['post_code'] = $param['post_code'];
            $sqlmap['company_email'] = $param['company_email'];

            foreach ($sqlmap as $key => $value) {
                //判断是否存在本条数据
                $is_presence = DB::table('contact')->where(['key'=>$key])->first();
                if($is_presence){
                    //存在则更新本条数据
                    $ret = DB::table('contact')->where(['key'=>$key])->update(['value'=>$value,'update_time'=>time()]);
                }else{
                    //不存在则添加本条数据
                    $ret = DB::table('contact')->insert(['key'=>$key,'value'=>$value,'update_time'=>time()]);
                }
                //配置写入永久缓存
                Cache::forever($key, $value);
            }
            return redirect('pqadmin/prompt')->with(['message' => '修改成功!', 'url' => '/pqadmin/contact_setting', 'jumpTime' => 3, 'status' => 'success']);
        }else{
            $contact_info = DB::table('contact')->pluck( 'value','key');
            return view('pqadmin.contact.contact_setting',['contact_info'=>$contact_info]);
        }
        
    }
}