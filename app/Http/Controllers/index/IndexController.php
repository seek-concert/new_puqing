<?php
/**
 * 【首页】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;
use Illuminate\Support\Facades\DB;

class IndexController extends BaseController
{
    /*==========【标题、关键词、描述】===========*/
    protected $title='';
    protected $keywords='';
    protected $description='';

    /*=======================[构造方法]=============================*/
    public function __construct()
    {
        parent::__construct();
    }

    /*=======================[首页]=============================*/
    public function index()
    {
        $data = [];
        /*----- [banner图] -----*/
        $data['banner_lists'] = DB::table('banner')->get();

        /*----- [案例列表] -----*/
        $data['case_lists'] =  DB::table('case')->limit(8)->orderby('input_time','desc')->get()?:[];

        /*----- [最新资讯] -----*/
        //行业动态
        $data['industry_news'] = DB::table('news')->limit(12)->select('id','thumbnail','title','description','input_time','keywords')->whereIn('category_id',[1,2,3,4])->orderBy('input_time', 'desc')->get()?:[];
        //公司新闻
        $data['company_news'] = DB::table('news')->limit(12)->select('id','thumbnail','title','description','input_time','keywords')->whereIn('category_id',[5,6])->orderBy('input_time', 'desc')->get()?:[];

        return $this->show(1,'',$data);
    }

}