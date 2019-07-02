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

}