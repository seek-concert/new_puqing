<?php
/**
 * 【网站建设】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;

class WebController extends BaseController
{
    /*==========【标题、关键词、描述】===========*/
    protected $title='网站定制开发_企业官网_重庆网站制作_重庆网站开发_重庆网站建设-普擎科技';
    protected $keywords='网站定制开发,企业官网,重庆网站制作,重庆网站开发,重庆网站建设,网站外包服务';
    protected $description='重庆普擎科技提供网页/APP UI设计，微信小程序开发、电商网站专属定制、重庆自适应网站外包、网站建设开发制作一条龙等整合策划与视觉执行，为品牌赋予新鲜且有新意的创意与体现,来自重庆网站建设开发制作外包的普擎科技。';


    /*=======================[构造方法]=============================*/
    public function __construct()
    {
        parent::__construct();
    }

    /*=======================[网站建设]=============================*/
    public function index()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(2,'',$data);
    }

    /*=======================[商城网站]=============================*/
    /*----- [B2B商城] -----*/
    public function web_site_shop_web()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(2,'',$data);
    }
    /*----- [B2B2C商城] -----*/
    public function web_site_shop_b2b2c()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(2,'',$data);
    }
    /*----- [分销商城] -----*/
    public function web_site_shop_sale()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(2,'',$data);
    }

    /*=======================[企业官网]=============================*/
    /*----- [企业官网] -----*/
    public function web_site_company_web()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(2,'',$data);
    }
    /*----- [视觉形象展示网站] -----*/
    public function web_site_company_view()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(2,'',$data);
    }
    /*----- [营销型网站建设] -----*/
    public function web_site_company_sale()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(2,'',$data);
    }
    /*----- [响应式官网] -----*/
    public function web_site_company_all()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(2,'',$data);
    }

    /*=======================[手机网站]=============================*/
    public function web_site_html5()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(2,'',$data);
    }

    /*=======================[门户网站]=============================*/
    public function web_site_portal_web()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(2,'',$data);
    }

    /*=======================[后台管理系统]=============================*/
    public function web_site_admin()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(2,'',$data);
    }

}