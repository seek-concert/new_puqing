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
    protected $title='重庆网站建设_网站外包_网站开发_网站制作_微信小程序开发-重庆普擎科技';
    protected $keywords='重庆网站建设,网站外包,重庆网站设计,重庆网站外包,重庆网站开发,网站建设制作公司,做建网站公司,重庆微信开发,微信公众号开发';
    protected $description='重庆普擎科技提供网页/APP UI设计，微信小程序开发、电商网站专属定制、重庆自适应网站外包、网站建设开发制作一条龙等整合策划与视觉执行，为品牌赋予新鲜且有新意的创意与体现,来自重庆网站建设开发制作外包的普擎科技。';


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