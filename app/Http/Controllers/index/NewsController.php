<?php
/**
 * 【新闻资讯】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;
use Illuminate\Support\Facades\DB;

class NewsController extends BaseController
{
    /*==========【标题、关键词、描述】===========*/
    protected $title = '网站建设技术文章_网站开发教程分享_网站制作技巧-普擎科技';
    protected $keywords = '网站建设技术文章,网站开发教程分享,网站建设外包,网站制作技巧,教程分享';
    protected $description='重庆普擎科技提供网页/APP UI设计，微信小程序开发、电商网站专属定制、重庆自适应网站外包、网站建设开发制作一条龙等整合策划与视觉执行，为品牌赋予新鲜且有新意的创意与体现,来自重庆网站建设开发制作外包的普擎科技。';


    /*=======================[构造方法]=============================*/
    public function __construct()
    {
        parent::__construct();
    }

    /*=======================[新闻资讯]=============================*/
    public function index()
    {
        $data = [];
        //公司新闻
        $data['company_news'] = DB::table('news')->limit(13)->select('id','thumbnail','title','description','input_time','keywords')->whereIn('category_id',[5,6])->orderBy('input_time', 'desc')->get()?:[];
        //行业动态
        $data['industry_news'] = DB::table('news')->select('id','thumbnail','title','keywords','description','input_time')->whereIn('category_id',[1,2,3,4])->orderBy('input_time', 'desc')->paginate(15);

        /*----- [案例列表] -----*/
        $data['case_lists'] =  DB::table('case')->limit(4)->orderby('input_time','desc')->get()?:[];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(6,'',$data);
    }

    /*=======================[新闻资讯详情]=============================*/
    public function news_info($id = 0)
    {
        $data = [];
        /*------详情-------*/
        $info = DB::table('news')
            ->select('id','title','author','source','keywords','description','content','input_time')
            ->where([
                'id' => $id
            ])
            ->first();
        if (empty($info)) {
            return redirect('/');
        }
        $data['infos'] = $info;
        /*------上下新闻-------*/
        $previous = DB::table('news')
            ->select('id', 'title')
            ->where([
                ['id', '<', $id]
            ])
            ->orderBy('id', 'desc')
            ->first();
        $next = DB::table('news')
            ->select('id', 'title')
            ->where([
                ['id', '>', $id]
            ])
            ->orderBy('id', 'asc')
            ->first();
        $data['previous'] = $previous;
        $data['next'] = $next;
        /*----- [行业动态] -----*/
        $data['industry_news'] = DB::table('news')->limit(6)->select('id','thumbnail','title','description','input_time','keywords')->whereIn('category_id',[1,2,3,4])->orderBy('input_time', 'desc')->get()?:[];

        /*----- [案例列表] -----*/
        $data['case_lists'] =  DB::table('case')->limit(4)->orderby('input_time','desc')->get()?:[];

         /* [TDK] */
        $data['title'] = $info->title?$info->title.'-重庆网站建设|普擎科技':$this->title;
        $data['keywords'] = $info->keywords?:$this->keywords;
        $data['description'] = $this->description;
        return $this->show(6,'',$data);
    }

    /*=======================[old 新闻资讯详情]=============================*/
    public function news_show($id = 0)
    {
        $data = [];
        /*------详情-------*/
        $info = DB::table('news')
            ->select('id','title','author','source','description','keywords','content','input_time')
            ->where([
                'id' => $id
            ])
            ->first();
        if (empty($info)) {
            return redirect('/');
        }
        $data['infos'] = $info;
        /*------上下新闻-------*/
        $previous = DB::table('news')
            ->select('id', 'title')
            ->where([
                ['id', '<', $id]
            ])
            ->orderBy('id', 'desc')
            ->first();
        $next = DB::table('news')
            ->select('id', 'title')
            ->where([
                ['id', '>', $id]
            ])
            ->orderBy('id', 'asc')
            ->first();
        $data['previous'] = $previous;
        $data['next'] = $next;
        /*----- [行业动态] -----*/
        $data['industry_news'] = DB::table('news')->limit(6)->select('id','thumbnail','title','description','input_time','keywords')->whereIn('category_id',[1,2,3,4])->orderBy('input_time', 'desc')->get()?:[];

        /*----- [案例列表] -----*/
        $data['case_lists'] =  DB::table('case')->limit(4)->orderby('input_time','desc')->get()?:[];

        /* [TDK] */
        $data['title'] = $info->title?$info->title.'-重庆网站建设|普擎科技':$this->title;
        $data['keywords'] = $info->keywords?:$this->keywords;
        $data['description'] = $this->description;
        return $this->show(6,'index/news/news_info',$data);
    }

}