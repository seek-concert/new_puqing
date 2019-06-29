<?php
/**
 * 【基础控制器】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    /**
     * protected $title 标题
     * protected $keywords 关键字
     * protected $description 描述
     */
    protected $title='';
    protected $keywords='';
    protected $description='';

    /**
     *[构造方法]
     */
    public function __construct(){

    }

    /**
     * 基础视图调用
     * @param int $type 选中的导航栏目(默认首页)
     * @param string $temp_url 模板路径
     * @param array $data 模板参数
     * @return \Illuminate\View\View|\Illuminate\Contracts\View\Factory
     */
    public function show($type=1,$temp_url='',$data=[]){
        $data['type'] = $type;
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return view($temp_url,$data);
    }
}