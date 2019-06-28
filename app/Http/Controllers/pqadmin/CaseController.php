<?php
/**
 * Created by PhpStorm.
 * User: 84934
 * Date: 2019/3/18
 * Time: 9:55
 */

namespace App\Http\Controllers\pqadmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaseController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 案例--显示页
     */
    public function index()
    {
        //数据查询
        $list = DB::table('case')->get();
        foreach ($list as $k => $v) {
            $list[$k]->category_name = DB::table('case_category')
                ->where([
                    'id' => $v->category_id
                ])
                ->value('name');
        }
        return view('pqadmin.case.case', ['list' => $list]);
    }

    /*
     * 案例--新增
     */
    public function add(Request $request)
    {
        //是否post提交
        if ($request->isMethod('post')) {
            //判断是否有文件上传
            if ($request->hasFile('thumbnail')) {
                //缩略图路径
                $thumbnail = $this->upload($request->file('thumbnail'),'case');
            } else {
                $thumbnail = '';
            }
            //新增数据
            $list = DB::table('case')
                ->insert([
                    'thumbnail' => $thumbnail,
                    'title' => $request->input('title', ''),
                    'url' => $request->input('url',''),
                    'keywords' => $request->input('keywords', ''),
                    'description' => $request->input('description', ''),
                    'category_id' => $request->input('category_id', 0),
                    'content' => $request->input('content', ''),
                    'input_time' => time()
                ]);
            //判断是否新增成功
            if ($list) {
                return redirect('pqadmin/prompt')->with(['message' => '新增成功!', 'url' => '/pqadmin/case', 'jumpTime' => 3, 'status' => 'success']);
            } else {
                return redirect('pqadmin/prompt')->with(['message' => '新增失败!', 'url' => '/pqadmin/case_add', 'jumpTime' => 3, 'status' => 'error']);
            }
        }

        //获取分类
        $list = DB::table('case_category')->get();
        return view('pqadmin.case.case_add', ['list' => $list]);
    }

    /*
     * 案例--修改
     */
    public function edit(Request $request, $id)
    {
        //判断是否post提交
        if ($request->isMethod('post')) {
            //判断是否有文件上传
            if ($request->hasFile('thumbnail')) {
                //缩略图路径
                $thumbnail = $this->upload($request->file('thumbnail'),'case');
            } else {
                $thumbnail = $request->input('thumbnail', '');
            }

            //修改数据
            $list = DB::table('case')
                ->where([
                    'id' => $id
                ])
                ->update([
                    'thumbnail' => $thumbnail,
                    'title' => $request->input('title', ''),
                    'url' => $request->input('url', ''),
                    'keywords' => $request->input('keywords', ''),
                    'description' => $request->input('description', ''),
                    'category_id' => $request->input('category_id', 0),
                    'content' => $request->input('content', ''),
                    'update_time' => time()
                ]);
            //判断是否新增成功
            if ($list) {
                return redirect('pqadmin/prompt')->with(['message' => '修改成功!', 'url' => '/pqadmin/case', 'jumpTime' => 3, 'status' => 'success']);
            } else {
                return redirect('pqadmin/prompt')->with(['message' => '修改失败!', 'url' => '/pqadmin/case_edit' . $id, 'jumpTime' => 3, 'status' => 'error']);
            }
        }

        //获取数据
        $list = DB::table('case')
            ->where([
                'id' => $id
            ])
            ->first();
        //获取分类
        $category = DB::table('case_category')->get();
        return view('pqadmin.case.case_edit', ['list' => $list, 'category' => $category]);
    }

    /*
     * 案例--查看
     */
    public function detail($id)
    {
        //数据查询
        $list = DB::table('case')
            ->where([
                'id' => $id
            ])
            ->first();
        $list->category_name = DB::table('case_category')
            ->where([
                'id' => $list->category_id
            ])
            ->value('name');
        return view('pqadmin.case.case_detail', ['list' => $list]);
    }

    /*
     * 案例--删除
     */
    public function del($id)
    {
        //删除数据
        $list = DB::table('case')
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