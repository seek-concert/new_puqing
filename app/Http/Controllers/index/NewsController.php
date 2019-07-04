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
    protected $title='';
    protected $keywords='';
    protected $description='';

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

        return $this->show(6,'',$data);
    }

    /*=======================[新闻资讯详情]=============================*/
    public function news_info($id = 0)
    {
        $data = [];
        //详细内容
        $list = DB::table('news')
            ->select('title', 'description','content','input_time')
            ->where([
                'id' => $id
            ])
            ->first();
        if (empty($list)) {
            return redirect('/');
        }
        $data['list'] = $list;
        //上下新闻
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
        //行业动态
        $data['industry_news'] = DB::table('news')->limit(6)->select('id','thumbnail','title','description','input_time','keywords')->whereIn('category_id',[1,2,3,4])->orderBy('input_time', 'desc')->get()?:[];

        /*----- [案例列表] -----*/
        $data['case_lists'] =  DB::table('case')->limit(4)->orderby('input_time','desc')->get()?:[];

        return $this->show(6,'',$data);
    }

}