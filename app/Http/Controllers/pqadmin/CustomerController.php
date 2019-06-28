<?php

namespace App\Http\Controllers\pqadmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Class CustomerController extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | 客户管理控制器
    |--------------------------------------------------------------------------
    |
    | 用户管理客户信息
    | function customer_lists     查看所有客户
    | function customer_add       添加新客户
    | function customer_add       修改客户资料
    | function customer_detail    查看客户详情
    | function customer_del       删除客户信息
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
    *   客户列表
    *   Date：2019/3/14
    *   
    */
    public function customer_lists(Request $request)
    {   
        //数据查询
        $list = DB::table('customer')->get();
        
        return view('pqadmin.customer.customer_lists',['list'=>$list]);
    }

    /*
    *   添加新客户
    *   @Date：2019/3/14
    *   @param username string 客户姓名
    *   @param phone string 客户手机号
    *   @param web_name string 网站名称
    *   @param web_url string 网站链接
    *   @param bt_url string 宝塔链接
    *   @param bt_username string 宝塔用户名
    *   @param bt_password string 宝塔密码
    *   @param yun_username string 云服务器账户用户名
    *   @param yun_password string 云服务器账户密码
    *   @param yun_services_username string 云服务器账户
    *   @param yun_services_password string 云服务器密码
    *   @param services_end_time string 服务到期时间
    *   @param description string 其他
    */
    public function customer_add(Request $request){
        if ($request->isMethod('post')) {
           $param = $request->all();
           $sqlmap = [];
           $sqlmap['username'] = isset($param['username'])?$param['username']:'';
           $sqlmap['phone'] = isset($param['phone'])?$param['phone']:'';
           $sqlmap['web_name'] = isset($param['web_name'])?$param['web_name']:'';
           $sqlmap['web_url'] = isset($param['web_url'])?$param['web_url']:'';
           $sqlmap['bt_url'] = isset($param['bt_url'])?$param['bt_url']:'';
           $sqlmap['bt_username'] = isset($param['bt_username'])?$param['bt_username']:'';
           $sqlmap['bt_password'] = isset($param['bt_password'])?$param['bt_password']:'';
           $sqlmap['yun_username'] = isset($param['yun_username'])?$param['yun_username']:'';
           $sqlmap['yun_password'] = isset($param['yun_password'])?$param['yun_password']:'';
           $sqlmap['yun_services_username'] = isset($param['yun_services_username'])?$param['yun_services_username']:'';
           $sqlmap['yun_services_password'] = isset($param['yun_services_password'])?$param['yun_services_password']:'';
           $sqlmap['services_end_time'] = isset($param['services_end_time'])?strtotime($param['services_end_time']):'';
           $sqlmap['description'] = isset($param['description'])?$param['description']:'';
           $sqlmap['input_time'] = time();
           //插入新数据
           $ret = DB::table('customer')->insert($sqlmap);
           if($ret){
                return redirect('pqadmin/prompt')->with(['message' => '添加新客户成功!', 'url' => '/pqadmin/customer_lists', 'jumpTime' => 3, 'status' => 'success']);
           }else{
                return redirect('pqadmin/prompt')->with(['message' => '添加出错,请稍后再试!', 'url' => '/pqadmin/customer_add', 'jumpTime' => 3, 'status' => 'error']);
           }
        }
        return view('pqadmin.customer.customer_add');
    }

    /*
    *   修改客户信息
    *   @Date：2019/3/17
    *   @param username string 客户姓名
    *   @param phone string 客户手机号
    *   @param web_name string 网站名称
    *   @param web_url string 网站链接
    *   @param bt_url string 宝塔链接
    *   @param bt_username string 宝塔用户名
    *   @param bt_password string 宝塔密码
    *   @param yun_username string 云服务器账户用户名
    *   @param yun_password string 云服务器账户密码
    *   @param yun_services_username string 云服务器账户
    *   @param yun_services_password string 云服务器密码
    *   @param services_end_time string 服务到期时间
    *   @param description string 其他
    */
    public function customer_edit(Request $request,$id=0){
        
        $info = DB::table('customer')->where(['id'=>$id])->first();
        if ($request->isMethod('post')) {
            $param = $request->all();
            $sqlmap['username'] = isset($param['username'])?$param['username']:'';
            $sqlmap['phone'] = isset($param['phone'])?$param['phone']:'';
            $sqlmap['web_name'] = isset($param['web_name'])?$param['web_name']:'';
            $sqlmap['web_url'] = isset($param['web_url'])?$param['web_url']:'';
            $sqlmap['bt_url'] = isset($param['bt_url'])?$param['bt_url']:'';
            $sqlmap['bt_username'] = isset($param['bt_username'])?$param['bt_username']:'';
            $sqlmap['bt_password'] = isset($param['bt_password'])?$param['bt_password']:'';
            $sqlmap['yun_username'] = isset($param['yun_username'])?$param['yun_username']:'';
            $sqlmap['yun_password'] = isset($param['yun_password'])?$param['yun_password']:'';
            $sqlmap['yun_services_username'] = isset($param['yun_services_username'])?$param['yun_services_username']:'';
            $sqlmap['yun_services_password'] = isset($param['yun_services_password'])?$param['yun_services_password']:'';
            $sqlmap['services_end_time'] = isset($param['services_end_time'])?strtotime($param['services_end_time']):'';
            $sqlmap['description'] = isset($param['description'])?$param['description']:'';
            $sqlmap['update_time'] = time();
            //修改数据
            $ret = DB::table('customer')->where(['id'=>$param['id']])->update($sqlmap);
           if($ret){
                return redirect('pqadmin/prompt')->with(['message' => '修改客户信息成功!', 'url' => '/pqadmin/customer_lists', 'jumpTime' => 3, 'status' => 'success']);
           }else{
                return redirect('pqadmin/prompt')->with(['message' => '修改信息出错!', 'url' => '/pqadmin/customer_edit/'.$param['id'], 'jumpTime' => 3, 'status' => 'error']);
           }
        }else{
            return view('pqadmin.customer.customer_edit',['info'=>$info]);
        }
        
    }


    /*
    *   查看客户信息客户信息
    *   @Date：2019/3/17
    *   @param id int 客户id
    */
    public function customer_detail($id = 0){
        if($id == 0){
            return redirect('pqadmin/prompt')->with(['message' => '请勿非法访问!', 'url' => '/pqadmin/customer_lists/', 'jumpTime' => 3, 'status' => 'error']);
        }
        $info = DB::table('customer')->where(['id'=>$id])->first();
        return view('pqadmin.customer.customer_detail',['info'=>$info]);
    }


     /*
    *   删除客户信息
    *   @Date：2019/3/17
    *   @param id int 客户id
    */
    public function customer_del(Request $request){
        $id = $request->id;
        if($id == 0){
            return redirect('pqadmin/prompt')->with(['message' => '请勿非法访问!', 'url' => '/pqadmin/customer_lists/', 'jumpTime' => 3, 'status' => 'error']);
        }
        $ret = DB::table('customer')->where(['id'=>$id])->delete();
        if($ret){
            return ['data'=>1,'msg'=>'删除数据成功'];
        }else{
            return ['data'=>-1,'msg'=>'删除数据失败'];
        }
    }
}