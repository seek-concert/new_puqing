{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="{{asset('index/css/web-site-company.css')}}">
@endsection

{{-- Content --}}
@section('content')
    <!-- banner -->
    <section class="commom-banner"></section>

    <section class="commom-navs">
        <div class="commom-navs-content">
            <a href="{{url('/web_site_company_web')}}" class="commom-navs-content__item">
                <div class="commom-navs-content__icon iconfont">&#xe69f;</div>
                <p class="commom-navs-content__title">企业官网建设</p>
            </a>
            <a href="{{url('/web_site_company_view')}}" class="commom-navs-content__item">
                <div class="commom-navs-content__icon iconfont">&#xe663;</div>
                <p class="commom-navs-content__title">视觉形象展示网站</p>
            </a>
            <a href="{{url('/web_site_company_sale')}}" class="commom-navs-content__item">
                <div class="commom-navs-content__icon iconfont">&#xe612;</div>
                <p class="commom-navs-content__title">营销型网站建设</p>
            </a>
            <a href="{{url('/web_site_company_all')}}" class="commom-navs-content__item active">
                <div class="commom-navs-content__icon iconfont">&#xe656;</div>
                <p class="commom-navs-content__title">响应式官网</p>
            </a>
        </div>
    </section>

    <section class="main-wrap">
        <div class="container-fluid">
            <div class="main-subtitle row pt-3">
                <a href="https://www.p7ing.com" title="普擎官网">首页</a>
                <a href="{{url('/web')}}" title="网站建设">网站建设</a>
                <a href="#" class="active" title="响应式官网详情">响应式官网</a>
            </div>
        </div>
    </section>
    <!-- 什么是响应式网站？ -->
    <section class="container company-wrap">
        <div class="row">
            <div class="col-12 col-md-6 order-md-12 order-0">
                <div class="company-wrap-allimg1"></div>
            </div>
            <div class="col-12 col-md-6 order-md-0 order-12">
                <div class="company-wrap-content">
                    <h1>什么是<span class="text-danger">响应式网站？</span></h1>
                    <p>
                        所谓的响应式网站设计（自适应网站设计），用最通俗的语言来讲，就是通过一个唯一的网址，唯一的一份网站内容，唯一的一份网站代码，通过CSS3媒体查询方式，可以在多种浏览器设备上进行一致的浏览。响应式站点设计的目的是期望网页设计和网页编码能够对用户的操作行为和环境进行合理的响应，而这种响应应建立在用户的浏览器屏幕大小、操作平台等。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 哪些网站适合响应式设计 -->
    <section class="company-wrap company-wrap-allbg1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6 offset-md-6 text-white">
                    <h1>哪些网站适合响应式设计</h1>
                    <ol class="mt-5">
                        <li class="pt-2"> 移动App开发者的公司网站和单独的App网页；</li>
                        <li class="pt-2"> 希望充分利用互联网的初创型公司网站；</li>
                        <li class="pt-2"> 外贸型企业网站；</li>
                        <li class="pt-2"> 新式的电子商务网站；</li>
                        <li class="pt-2"> 面向消费者和大众市场的品牌企业网站；</li>
                        <li class="pt-2"> 新兴互联网媒体和网上社区类网站；</li>
                        <li class="pt-2"> 传统媒体向移动互联网数字化过渡的网站改版；</li>
                        <li class="pt-2"> 任何不想放弃移动互联网用户的商家和个人网站。</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- 响应式网站 -->
    <section class="container company-wrap">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 order-md-12 order-0">
                <div class="company-wrap-allimg2"></div>
            </div>
            <div class="col-12 col-md-6 order-md-0 order-12">
                <div class="company-wrap-content">
                    <h1>响应式网站 <br> <span class="text-qblue">互联网建站新潮流</span></h1>
                    <p>
                        当新的移动设备以潮水般的速度涌进我们生活的时候，网站建设向手机网站建设倾斜，拥有一个可以适应多种屏幕分辨率的网站建设就显得尤为重要了。据ComScore在2012年的调查发现，2009年全世界仅有8亿部移动互联网用户，而到2015，将有19亿移动互联网用户，而相比较而言，桌面互联网用户从2009到2015年只会增加2亿左右，增幅远远低于移动互联网的普及度。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 响应式网站的优点 -->
    <section class="company-wrap company-wrap-allbg2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 text-white text-center">
                    <h1>响应式网站的优点</h1>
                    <p>
                        响应式网站考虑了不同的终端下不同分辨率下的显示效果，如果移动设备浏览传统网站，由于没有对移动设备进行过优化处理，所有体验效果相对会比较差，响应式网站设计，根据不同分辨率都会出现的显示效果都进行了现对调整，大大提高了用户浏览的体验效果。
                    </p>
                    <div class="row justify-content-center text-center">
                        <div class="col-md-2 col-3 mx-3 wrap-all-itembg1">提升用户 <br> 体验</div>
                        <div class="col-md-2 col-3 mx-3 wrap-all-itembg2">节省时间 <br> 和成本</div>
                        <div class="col-md-2 col-3 mx-3 wrap-all-itembg3">对seo更 <br> 加友好</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 响应式网站是大势所趋 -->
    <section class="container company-wrap">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 order-md-12 order-0">
                <div class="company-wrap-allimg3"></div>
            </div>
            <div class="col-12 col-md-6 order-md-0 order-12">
                <div class="company-wrap-content">
                    <h1>响应式网站是<span class="text-qblue">大势所趋</span></h1>
                    <div class="w-100 py-3"><img src="{{asset('index/images/website/all-img4.jpg')}}" alt="响应式网站建设"></div>
                    <p>
                        未来几年内不断发展的移动设备、电脑设备、平板设备还将极速发展，若是没有响应式Web设计谁知道我们谁会知道究竟还要开发多少个不同的页面。响应式网站在国外已经非常流行，随着HTML5、CSS3
                        等技术的发展，响应式网站已成为一种趋势，只是国内IT技术总会比国外慢几个跟斗，随着老本版IE浏览器慢慢退出市场，新的浏览器的强劲推动，未来响应式网站必将会层出不穷。
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- footer --}}
        @include('index.public.footer')
    {{-- footer end --}}
@endsection

{{-- js --}}
@section('js')

@endsection
