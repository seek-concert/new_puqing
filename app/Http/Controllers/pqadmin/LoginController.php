<?php

namespace App\Http\Controllers\pqadmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


Class LoginController extends Controller
{

    public function __construct()
    {

    }

    /*
     * 后台登录页
     */
    public function login()
    {
        return view('pqadmin.login.login');
    }

    /*
     * 登录操作
     */
    public function passport(Request $request)
    {
        //自定义验证规则
        $rules = [
            'username' => 'required',
            'password' => 'required',
        ];
        //自定义错误信息
        $messages = [
            'username.required' => '名称不能为空！',
            'password.required' => '密码不能为空！',
        ];
        //验证数据
        $validator = Validator::make($request->all(), $rules, $messages);
        //验证失败返回信息
        if ($validator->fails()) {
            return redirect('pqadmin/prompt')->with(['message'=>$validator->errors()->first(),'url' =>'/pqadmin/login', 'jumpTime'=>3,'status'=>'error']);
        }
        //获取信息
        $username = $request->input('username');
        $password = $request->input('password');
        //数据查询
        $list = DB::table('user')
            ->where([
                'username' => $username
            ])
            ->first();
        //验证账号是否为空
        if(empty($list)){
            return redirect('pqadmin/prompt')->with(['message'=>'账号密码错误','url' =>'/pqadmin/login', 'jumpTime'=>3,'status'=>'error']);
        }
        //验证密码正确性
        if(Hash::check($password,$list->password)){
            session(['username'=>$list->username]);
            return redirect('pqadmin/prompt')->with(['message'=>'登录成功，即将跳转到后台首页','url' =>'/pqadmin/index', 'jumpTime'=>3,'status'=>'success']);
        }else{
            return redirect('pqadmin/prompt')->with(['message'=>'账号密码错误','url' =>'/pqadmin/login', 'jumpTime'=>3,'status'=>'error']);
        }
    }

    /*
     * 退出登录
     */
    public function loginOut(Request $request)
    {
        $request->session()->forget('username');
        return redirect('pqadmin/prompt')->with(['message'=>'退出成功！','url' =>'/pqadmin/login', 'jumpTime'=>3,'status'=>'success']);
    }
}