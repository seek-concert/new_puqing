<?php

namespace App\Http\Controllers\pqadmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;

Class WebController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 网站设置--显示页
     */
    public function index()
    {
        //数据查询
        $list = DB::table('web')
            ->where([
                'id' => 1
            ])
            ->first();
        //页面展示
        return view('pqadmin.web_setting.web_setting', ['list'=>$list]);
    }

    /*
     * 网站设置--修改
     */
    public function save(Request $request)
    {
        //判断是否有文件上传
        if ($request->hasFile('logo')) {
            //logo路径
            $logo = $this->upload($request->file('logo'),'logo');
        }else{
            $logo = $request->input('logo','');
        }
        $data = $request->all();
        $data['logo'] = $logo;
        //数据修改
        $list = DB::table('web')
            ->where([
                'id' => 1
            ])
            ->update([
                'logo' => $logo,
                'name' => $request->input('name',''),
                'title' => $request->input('title',''),
                'keywords' => $request->input('keywords',''),
                'description' => $request->input('description',''),
                'copyrights' => $request->input('copyrights',''),
                'statistical' => $request->input('statistical',''),
                'copyright' => $request->input('copyright',''),
                'update_time' => time()
            ]);
        //修改是否成功
        if ($list) {
            $this->get_setting_cache($data);
            return redirect('pqadmin/prompt')->with(['message' => '修改成功!', 'url' => '/pqadmin/web_setting', 'jumpTime' => 3, 'status' => 'success']);
        } else {
            return redirect('pqadmin/prompt')->with(['message' => '修改失败!', 'url' => '/pqadmin/web_setting', 'jumpTime' => 3, 'status' => 'error']);
        }
    }

    /*
     * 网站设置写入永久缓存
     */
    public function get_setting_cache($data){
        Cache::forever('logo', $data['logo']);
        Cache::forever('name', $data['name']);
        Cache::forever('title', $data['title']);
        Cache::forever('keywords', $data['keywords']);
        Cache::forever('description', $data['description']);
        Cache::forever('copyrights', $data['copyrights']);
        Cache::forever('statistical', $data['statistical']);
        Cache::forever('copyright', $data['copyright']);
    }
}