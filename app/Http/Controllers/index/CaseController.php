<?php
/**
 * 【成功案例】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CaseController extends BaseController
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

    /*=======================[成功案例]=============================*/
    public function index($id = 0)
    {
        $data = [];
        /*-------产品列表------*/
        if($id == 0){
            $data['case_lists'] = DB::table('case')->select('id','thumbnail','title','keywords','description','category_id')->paginate(4);
        }else{
            $data['case_lists'] = DB::table('case')->select('id','thumbnail','title','keywords','description','category_id')->where('category_id','=',$id)->paginate(12);
        }

        /*----- [最新资讯] -----*/
        $data['industry_news'] = DB::table('news')->limit(12)->select('id','thumbnail','title','description','input_time','keywords')->whereIn('category_id',[1,2,3,4])->orderBy('input_time', 'desc')->get()?:[];

        return $this->show(5,'',$data);
    }

    /*=======================[成功案例详情]=============================*/
    public function case_info(Request $request,$id = 0)
    {
        $data = [];
        /*------详情-------*/
        $info = DB::table('case')
            ->select('id','title','description', 'content', 'url','input_time')
            ->where([
                'id' => $id
            ])
            ->first();
        if (empty($info)) {
            return redirect('/');
        }
        $data['infos'] = $info;
        /*------最近案例列表------*/
        $case_list1 = DB::table('case')->select('id','thumbnail','title','keywords','category_id')
            ->where([
                ['id', '<=', $id]
            ])
            ->limit(4)->get();
        $case_list2 = DB::table('case')->select('id','thumbnail','title','keywords','category_id')
            ->where([
                ['id', '>', $id]
            ])
            ->limit(4)->get();
        $case_list =  array_merge($case_list1->toArray(),$case_list2->toArray());
        $data['case_list'] = $case_list;
        /*------上下案例------*/
        $previous = DB::table('case')
            ->select('id', 'title')
            ->where([
                ['id', '<', $id]
            ])
            ->orderBy('id', 'desc')
            ->first();
        $next = DB::table('case')
            ->select('id', 'title')
            ->where([
                ['id', '>', $id]
            ])
            ->orderBy('id', 'asc')
            ->first();
        $data['previous'] = $previous;
        $data['next'] = $next;

        /*----- [最新资讯] -----*/
        $data['industry_news'] = DB::table('news')->limit(12)->select('id','thumbnail','title','description','input_time','keywords')->whereIn('category_id',[1,2,3,4])->orderBy('input_time', 'desc')->get()?:[];
        if($request->isMethod('post')){
            unset($data['case_list']);
            unset($data['industry_news']);
            $data['infos']= $info = DB::table('case')
                ->select('id','title','description', 'content', 'url','input_time')
                ->where([
                    'id' => $request->input('type_id')
                ])
                ->first();;
            $result=['code'=>'success','message'=>'请求成功','data'=>$data];
            return response()->json($result);
        }
        return $this->show(5,'',$data);
    }

}