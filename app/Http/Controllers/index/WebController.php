<?php
/**
 * 【网站建设】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;

class WebController extends BaseController
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

    /*=======================[网站建设]=============================*/
    public function index()
    {
        $data = [];

        return $this->show(2,'',$data);
    }

    /*=======================[商城网站]=============================*/
    /*----- [B2B商城] -----*/
    public function web_site_shop_web()
    {
        $data = [];

        return $this->show(2,'',$data);
    }
    /*----- [B2B2C商城] -----*/
    public function web_site_shop_b2b2c()
    {
        $data = [];

        return $this->show(2,'',$data);
    }
    /*----- [分销商城] -----*/
    public function web_site_shop_sale()
    {
        $data = [];

        return $this->show(2,'',$data);
    }

    /*=======================[企业官网]=============================*/
    /*----- [企业官网] -----*/
    public function web_site_company_web()
    {
        $data = [];

        return $this->show(2,'',$data);
    }
    /*----- [视觉形象展示网站] -----*/
    public function web_site_company_view()
    {
        $data = [];

        return $this->show(2,'',$data);
    }
    /*----- [营销型网站建设] -----*/
    public function web_site_company_sale()
    {
        $data = [];

        return $this->show(2,'',$data);
    }
    /*----- [响应式官网] -----*/
    public function web_site_company_all()
    {
        $data = [];

        return $this->show(2,'',$data);
    }

    /*=======================[手机网站]=============================*/
    public function web_site_html5()
    {
        $data = [];

        return $this->show(2,'',$data);
    }

    /*=======================[门户网站]=============================*/
    public function web_site_portal_web()
    {
        $data = [];

        return $this->show(2,'',$data);
    }

    /*=======================[后台管理系统]=============================*/
    public function web_site_admin()
    {
        $data = [];

        return $this->show(2,'',$data);
    }

}