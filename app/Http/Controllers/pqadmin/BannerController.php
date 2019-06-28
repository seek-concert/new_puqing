<?php
/**
 * Created by PhpStorm.
 * User: 84934
 * Date: 2019/3/19
 * Time: 16:11
 */

namespace App\Http\Controllers\pqadmin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * banner图--显示页
     */
    public function index()
    {
        //获取数据
        $list = DB::table('banner')->get();

        return view('pqadmin.banner.banner', ['list' => $list]);
    }

    /*
     * banner图--新增
     */
    public function add(Request $request)
    {
        //是否post提交
        if ($request->isMethod('post')) {
            //判断是否有文件上传
            if ($request->hasFile('img')) {
                //缩略图路径
                $img = $this->upload($request->file('img'),'banner');
            } else {
                $img = '';
            }
            //新增数据
            $list = DB::table('banner')
                ->insert([
                    'img' => $img,
                    'url' => $request->input('url', ''),
                    'input_time' => time()
                ]);
            //判断是否新增成功
            if ($list) {
                return redirect('pqadmin/prompt')->with(['message' => '新增成功!', 'url' => '/pqadmin/banner', 'jumpTime' => 3, 'status' => 'success']);
            } else {
                return redirect('pqadmin/prompt')->with(['message' => '新增失败!', 'url' => '/pqadmin/banner_add', 'jumpTime' => 3, 'status' => 'error']);
            }
        }
        return view('pqadmin.banner.banner_add');
    }

    /*
     * banner图--修改
     */
    public function edit(Request $request,$id)
    {
        //判断是否post提交
        if ($request->isMethod('post')) {
            //判断是否有文件上传
            if ($request->hasFile('img')) {
                //缩略图路径
                $img = $this->upload($request->file('img'),'banner');
            } else {
                $img = $request->input('img', '');
            }

            //修改数据
            $list = DB::table('banner')
                ->where([
                    'id' => $id
                ])
                ->update([
                    'img' => $img,
                    'url' => $request->input('url', ''),
                    'update_time' => time()
                ]);
            //判断是否新增成功
            if ($list) {
                return redirect('pqadmin/prompt')->with(['message' => '修改成功!', 'url' => '/pqadmin/banner', 'jumpTime' => 3, 'status' => 'success']);
            } else {
                return redirect('pqadmin/prompt')->with(['message' => '修改失败!', 'url' => '/pqadmin/banner_edit' . $id, 'jumpTime' => 3, 'status' => 'error']);
            }
        }

        //获取数据
        $list = DB::table('banner')
            ->where([
                'id' => $id
            ])
            ->first();
        return view('pqadmin.banner.banner_edit', ['list' => $list]);
    }

    /*
     * banner图--删除
     */
    public function del($id)
    {
        //删除数据
        $list = DB::table('banner')
            ->where([
                'id' => $id
            ])
            ->delete();
        if ($list) {
            return ['data' => 1, 'msg' => '删除数据成功'];
        } else {
            return ['data' => -1, 'msg' => '删除数据失败'];
        }
    }

}