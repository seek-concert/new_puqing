<?php
/**
 * 【新闻资讯】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;

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

        return $this->show(6,'',$data);
    }

    /*=======================[新闻资讯详情]=============================*/
    public function news_info()
    {
        $data = [];

        return $this->show(6,'',$data);
    }

}