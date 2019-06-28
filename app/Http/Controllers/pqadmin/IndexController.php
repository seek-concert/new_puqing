<?php

namespace App\Http\Controllers\pqadmin;

Class IndexController extends BaseController
{

    public function __construct()
    {
        parent::__construct();
    }

    /*
     * 首页
     */
    public function index()
    {
        return view('pqadmin.index.index');
    }
}