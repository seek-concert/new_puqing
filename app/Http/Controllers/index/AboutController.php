<?php
/**
 * 【关于普擎】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;

class AboutController extends BaseController
{
    /*==========【标题、关键词、描述】===========*/
    protected $title = '公司简介_团队信息_联系方式_付款方式_站点地图-普擎科技';
    protected $keywords = '公司简介,团队信息,联系方式,付款方式,站点地图,普擎科技';
    protected $description='重庆普擎科技提供网页/APP UI设计，微信小程序开发、电商网站专属定制、重庆自适应网站外包、网站建设开发制作一条龙等整合策划与视觉执行，为品牌赋予新鲜且有新意的创意与体现,来自重庆网站建设开发制作外包的普擎科技。';


    /*=======================[构造方法]=============================*/
    public function __construct()
    {
        parent::__construct();
    }

    /*=======================[关于普擎]=============================*/
    public function index()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(7,'',$data);
    }

}