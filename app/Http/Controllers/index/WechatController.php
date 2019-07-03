<?php
/**
 * 【微信开发】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;

class WechatController extends BaseController
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

    /*=======================[微信开发]=============================*/
    public function index()
    {
        $data = [];

        return $this->show(3,'',$data);
    }

    /*=======================[公众号]=============================*/
    public function wechat_dev_public()
    {
        $data = [];

        return $this->show(1,'',$data);
    }
    /*=======================[小程序]=============================*/
    public function wechat_dev_small()
    {
        $data = [];

        return $this->show(1,'',$data);
    }
    /*=======================[微商城]=============================*/
    public function web_site_shop_web()
    {
        $data = [];

        return $this->show(1,'',$data);
    }
    /*=======================[微服务]=============================*/
    public function wechat_dev_service()
    {
        $data = [];

        return $this->show(1,'',$data);
    }
    

}