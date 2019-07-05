<?php
/**
 * 【微信开发】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;

class WechatController extends BaseController
{
    /*==========【标题、关键词、描述】===========*/
    protected $title='重庆微信公众号_微信小程序_微商城_微服务开发-普擎科技';
    protected $keywords='重庆微信公众号,微信小程序,微商城,微服务,重庆网站建设,网站外包服务';
    protected $description='重庆普擎科技提供网页/APP UI设计，微信小程序开发、电商网站专属定制、重庆自适应网站外包、网站建设开发制作一条龙等整合策划与视觉执行，为品牌赋予新鲜且有新意的创意与体现,来自重庆网站建设开发制作外包的普擎科技。';


    /*=======================[构造方法]=============================*/
    public function __construct()
    {
        parent::__construct();
    }

    /*=======================[微信开发]=============================*/
    public function index()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(3,'',$data);
    }

    /*=======================[公众号]=============================*/
    public function wechat_dev_public()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(3,'',$data);
    }

    /*=======================[小程序]=============================*/
    public function wechat_dev_small()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(3,'',$data);
    }

    /*=======================[微商城]=============================*/
    /*==[B2B商城]==*/
    public function wechat_site_shop_web()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(3,'',$data);
    }
    /*==[B2B2C商城]==*/
    public function wechat_site_shop_b2b2c()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(3,'',$data);
    }
    /*==[分销商城]==*/
    public function wechat_site_shop_sale()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(3,'',$data);
    }



    /*=======================[微服务]=============================*/
    public function wechat_dev_service()
    {
        $data = [];

         /* [TDK] */
        $data['title'] = $this->title;
        $data['keywords'] = $this->keywords;
        $data['description'] = $this->description;
        return $this->show(3,'',$data);
    }
    

}