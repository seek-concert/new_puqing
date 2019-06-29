<?php
/**
 * 【软件定制】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;

class AppController extends BaseController
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

    /*=======================[软件定制]=============================*/
    public function index()
    {
        $data = [];

        return $this->show(4,'',$data);
    }

}