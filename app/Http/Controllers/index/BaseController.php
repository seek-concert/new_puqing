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
     * protected $modules 模型
     * protected $controller 控制器
     * protected $method 方法
     * protected $title 标题
     * protected $keywords 关键字
     * protected $description 描述
     */
    protected $modules='';
    protected $controller='';
    protected $method='';
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
        if(!$temp_url){
           $temp_url=$this->getTemplatePath();
        }
        $data['type'] = $type;
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return view($temp_url,$data);
    }

    /**
     * 获取 模块 控制器 方法名
     */
    protected function getTemplatePath()
    {
        /* 获取路由指向*/
        list($class, $method) = explode('@', request()->route()->getActionName());

        /* 模块名*/
        $this->modules = str_replace(
            '\\',
            '.',
            str_replace('App\\Http\\Controllers\\', '',
                trim(implode('\\', array_slice(explode('\\', $class), 0, -1)), '\\')
            )
        );

        /* 控制器名称*/
        $this->controller = str_replace('Controller', '', substr(strrchr($class, '\\'), 1));

        /* 方法名*/
        $this->method = $method;
        return strtolower($this->modules).'.'.strtolower($this->controller).'.'.strtolower($this->method);
    }

}