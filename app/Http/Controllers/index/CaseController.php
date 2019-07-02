<?php
/**
 * 【成功案例】
 * @author 普擎科技
 */
namespace App\Http\Controllers\index;

class CaseController extends BaseController
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

    /*=======================[成功案例]=============================*/
    public function index()
    {
        $data = [];

        return $this->show(5,'',$data);
    }

    /*=======================[成功案例详情]=============================*/
    public function case_info()
    {
        $data = [];

        return $this->show(5,'',$data);
    }

}