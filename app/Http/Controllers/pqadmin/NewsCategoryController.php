<?php
/**
 * Created by PhpStorm.
 * User: 84934
 * Date: 2019/3/17
 * Time: 15:16
 */

namespace App\Http\Controllers\pqadmin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsCategoryController extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 新闻分类--显示页
     */
    public function index()
    {
        //数据查询
        $list = DB::table('news_category')->get();

        return view('pqadmin.news_category.news_category', ['list' => $list]);
    }

    /*
     * 新闻分类--新增
     */
    public function add(Request $request)
    {
        //判断是否post提交
        if ($request->isMethod('post')) {
            //数据新增
            $list = DB::table('news_category')
                ->insert([
                    'name' => $request->input('name',''),
                    'input_time' => time()
                ]);
            //新增是否成功
            if ($list) {
                return redirect('pqadmin/prompt')->with(['message' => '新增成功!', 'url' => '/pqadmin/news_category', 'jumpTime' => 3, 'status' => 'success']);
            } else {
                return redirect('pqadmin/prompt')->with(['message' => '新增失败!', 'url' => '/pqadmin/news_category', 'jumpTime' => 3, 'status' => 'error']);
            }
        }

        return view('pqadmin.news_category.news_category_add');
    }

    /*
     * 新闻分类--修改
     */
    public function edit(Request $request, $id = 0)
    {
        //判断是否post提交
        if ($request->isMethod('post')) {
            //数据修改
            $list = DB::table('news_category')
                ->where([
                    'id' => $id
                ])
                ->update([
                    'name' => $request->input('name',''),
                    'update_time' => time()
                ]);
            //修改是否成功
            if ($list) {
                return redirect('pqadmin/prompt')->with(['message' => '修改成功!', 'url' => '/pqadmin/news_category', 'jumpTime' => 3, 'status' => 'success']);
            } else {
                return redirect('pqadmin/prompt')->with(['message' => '修改失败!', 'url' => '/pqadmin/news_category_edit/' . $id, 'jumpTime' => 3, 'status' => 'error']);
            }
        }
        //数据获取
        $list = DB::table('news_category')
            ->where([
                'id' => $id
            ])
            ->first();
        return view('pqadmin.news_category.news_category_edit', ['list' => $list]);
    }

    /*
     * 新闻分类--删除
     */
    public function del($id)
    {
        $list = DB::table('news_category')
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