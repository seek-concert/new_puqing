<?php
/**
 * Created by PhpStorm.
 * User: 84934
 * Date: 2019/3/22
 * Time: 10:30
 */

namespace App\Http\Controllers\pqadmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolutionController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 解决方案 -- 显示页
     */
    public function index()
    {
        //数据查询
        $list = DB::table('solution')->get();
        return view('pqadmin.solution.solution',['list' => $list]);
    }

    /*
     * 解决方案--新增
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
            $list = DB::table('solution')
                ->insert([
                    'thumbnail' => $thumbnail,
                    'title' => $request->input('title', ''),
                    'keywords' => $request->input('keywords', ''),
                    'description' => $request->input('description', ''),
                    'content' => $request->input('content', ''),
                    'input_time' => time()
                ]);
            //判断是否新增成功
            if ($list) {
                return redirect('pqadmin/prompt')->with(['message' => '新增成功!', 'url' => '/pqadmin/solution', 'jumpTime' => 3, 'status' => 'success']);
            } else {
                return redirect('pqadmin/prompt')->with(['message' => '新增失败!', 'url' => '/pqadmin/solution_add', 'jumpTime' => 3, 'status' => 'error']);
            }
        }

        return view('pqadmin.solution.solution_add');
    }

    /*
     * 解决方案--修改
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
            $list = DB::table('solution')
                ->where([
                    'id' => $id
                ])
                ->update([
                    'thumbnail' => $thumbnail,
                    'title' => $request->input('title', ''),
                    'keywords' => $request->input('keywords', ''),
                    'description' => $request->input('description', ''),
                    'content' => $request->input('content', ''),
                    'update_time' => time()
                ]);
            //判断是否新增成功
            if ($list) {
                return redirect('pqadmin/prompt')->with(['message' => '修改成功!', 'url' => '/pqadmin/solution', 'jumpTime' => 3, 'status' => 'success']);
            } else {
                return redirect('pqadmin/prompt')->with(['message' => '修改失败!', 'url' => '/pqadmin/solution_edit' . $id, 'jumpTime' => 3, 'status' => 'error']);
            }
        }

        //获取数据
        $list = DB::table('solution')
            ->where([
                'id' => $id
            ])
            ->first();
        return view('pqadmin.solution.solution_edit', ['list' => $list]);
    }

    /*
     * 解决方案--查看
     */
    public function detail($id)
    {
        //数据查询
        $list = DB::table('solution')
            ->where([
                'id' => $id
            ])
            ->first();
        return view('pqadmin.solution.solution_detail', ['list' => $list]);
    }

    /*
     * 解决方案--删除
     */
    public function del($id)
    {
        //删除数据
        $list = DB::table('solution')
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