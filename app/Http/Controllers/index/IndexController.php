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
    protected $title='重庆网站建设_网站外包_网站开发_网站制作_微信小程序开发-重庆普擎科技';
    protected $keywords='重庆网站建设,网站外包,重庆网站外包,重庆网站开发';
    protected $description='重庆普擎科技提供网页/APP UI设计，微信小程序开发、电商网站专属定制、重庆自适应网站外包、网站建设开发制作一条龙等整合策划与视觉执行，为品牌赋予新鲜且有新意的创意与体现,来自重庆网站建设开发制作外包的普擎科技。';


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

        /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(1,'',$data);
    }

}