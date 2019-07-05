<?php
/**
 * 【软件定制】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;

class AppController extends BaseController
{
    /*==========【标题、关键词、描述】===========*/
    protected $title='重庆APP开发_软件定制_IOS Android_WEBAPP开发-普擎科技';
    protected $keywords='重庆APP开发,软件定制,WEBAPP,软件项目流程,软件开发成本';
    protected $description='重庆普擎科技提供网页/APP UI设计，微信小程序开发、电商网站专属定制、重庆自适应网站外包、网站建设开发制作一条龙等整合策划与视觉执行，为品牌赋予新鲜且有新意的创意与体现,来自重庆网站建设开发制作外包的普擎科技。';

    /*=======================[构造方法]=============================*/
    public function __construct()
    {
        parent::__construct();
    }

    /*=======================[软件定制]=============================*/
    public function index()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(4,'',$data);
    }

    /*=======================[原生APP/WEB APP]=============================*/
    public function soft_creat_app()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = '重庆软件定制_开发一款软件需要多少钱_软件开发流程-普擎科技';
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(4,'',$data);
    }

}