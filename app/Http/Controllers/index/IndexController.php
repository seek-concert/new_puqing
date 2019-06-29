<?php
/**
 * 【首页】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;

class IndexController extends BaseController
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

    /*=======================[首页]=============================*/
    public function index()
    {
        $data = [];

        return $this->show(1,'',$data);
    }

}