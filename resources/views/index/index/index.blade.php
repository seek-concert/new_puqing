{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="{{asset('index/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/main.css')}}">
@endsection

{{-- Content --}}
@section('content')
<main class="main-body swiper-container swiper-container-v">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            {{--  banner--}}
            <section class="banner swiper-container swiper-container-h">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="{{asset('index/images/banner.jpg')}}" alt="banner1">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('index/images/banner.jpg')}}" alt="banner2">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{asset('index/images/banner.jpg')}}" alt="banner3">
                    </div>
                </div>
                {{-- Add Pagination --}}
                <div class="swiper-pagination swiper-pagination-h"></div>
                {{-- Add Arrows --}}
                {{-- <div class="swiper-button-next swiper-button-next-h"></div>
                <div class="swiper-button-prev swiper-button-prev-h"></div> --}}
            </section>

        </div>
        <div class="swiper-slide">
            {{--    开发业务--}}
            <section class="bus-wrap main-view">
                <div class="main-section">
                    <h1 class="ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                        swiper-animate-delay="0.2s">DEVELOP BUSINESS</h1>
                    <div class="main-section-line ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s"
                         swiper-animate-delay="0.2s"><span></span></div>
                    <p class="main-section-title ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                       swiper-animate-delay="0.2s">开发业务</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 pb-3">
                            <div class="wrap-item bus-item-bg1 ani" swiper-animate-effect="fadeInLeft"
                                 swiper-animate-duration="0.5s" swiper-animate-delay="0.2s">
                                <div class="wrap-item-content">
                                    <h2>网站建设</h2>
                                    <div class="d-flex flex-md-row flex-column">
                                        <p class="d-flex flex-column">
                                            <span class="tags-line">企业官网</span>
                                            <span class="tags-line">手机网站</span>
                                            <span class="tags-line">门户网站</span>
                                        </p>
                                        <p class="d-flex flex-column">
                                            <span class="tags-line">商城网站</span>
                                            <span class="tags-line">后台管理系统</span>
                                            <span class="tags-line">快速建站</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 pb-3">
                            <div class="wrap-item bus-item-bg2 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="0.2s">
                                <div class="wrap-item-content">
                                    <h2>微信开发</h2>
                                    <div class="d-flex flex-md-row flex-column">
                                        <p class="d-flex flex-column">
                                            <span class="tags-line">微信公众号</span>
                                            <span class="tags-line">微商城</span>
                                            <span class="tags-line">微服务</span>
                                        </p>
                                        <p class="d-flex flex-column">
                                            <span class="tags-line">微信小程序</span>
                                            <span class="tags-line">微官网</span>
                                            <span class="tags-line">解决方案</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-12 pb-3">
                            <div class="wrap-item bus-item-bg3 ani" swiper-animate-effect="fadeInRight"
                                 swiper-animate-duration="0.5s" swiper-animate-delay="0.2s">
                                <div class="wrap-item-content">
                                    <h2>软件定制</h2>
                                    <div class="d-flex flex-md-row flex-column">
                                        <p class="d-flex flex-column">
                                            <span class="tags-line">IOS APP</span>
                                            <span class="tags-line">WEB APP</span>
                                            <span class="tags-line">解决方案</span>
                                        </p>
                                        <p class="d-flex flex-column">
                                            <span class="tags-line">Android APP</span>
                                            <span class="tags-line">项目流程</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 pb-3">
                            <div class="wrap-item bus-item-bg4 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="0.2s">
                                <div class="wrap-item-content">
                                    <h2>UI/UE设计</h2>
                                    <div class="d-flex flex-md-row flex-column">
                                        <p class="d-flex flex-column">
                                            <span class="tags-line">APP界面设计</span>
                                            <span class="tags-line">网页设计</span>
                                            <span class="tags-line">官网设计</span>
                                        </p>
                                        <p class="d-flex flex-column">
                                            <span class="tags-line">海报设计</span>
                                            <span class="tags-line">UE设计</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 pb-3">
                            <div class="wrap-item bus-item-bg5 ani" swiper-animate-effect="fadeInRight"
                                 swiper-animate-duration="0.5s" swiper-animate-delay="0.2s">
                                <div class="wrap-item-content">
                                    <h2>SEO优化</h2>
                                    <div class="d-flex flex-md-row flex-column">
                                        <p class="d-flex flex-column">
                                            <span class="tags-line">关键字排名</span>
                                            <span class="tags-line">搜索引擎优化</span>
                                            <span class="tags-line">整站优化</span>
                                        </p>
                                        <p class="d-flex flex-column">
                                            <span class="tags-line">快速上首页</span>
                                            <span class="tags-line">解决方案</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12 pb-3">
                            <div class="wrap-item bus-item-bg6 ani" swiper-animate-effect="fadeInLeft"
                                 swiper-animate-duration="0.5s" swiper-animate-delay="0.2s">
                                <div class="wrap-item-content">
                                    <h2>售后服务</h2>
                                    <div class="d-flex flex-md-row flex-column">
                                        <p class="d-flex flex-column">
                                            <span class="tags-line">问题解答</span>
                                            <span class="tags-line">免费维护一年</span>
                                        </p>
                                        <p class="d-flex flex-column">
                                            <span class="tags-line">使用教学</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="swiper-slide">
            {{--    成功案例--}}
            <section class="case-wrap">
                <div class="main-view">
                    <div class="main-section">
                        <h1 class="ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                            swiper-animate-delay="0.2s">SUCCESSFUL CASE</h1>
                        <div class="main-section-line ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s"
                             swiper-animate-delay="0.2s"><span></span></div>
                        <p class="main-section-title ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                           swiper-animate-delay="0.2s">成功案例</p>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="wrap-item ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="0.2s">
                                    <div class="wrap-item-content">
                                        <div class="text-hide case-box"
                                             style="background: url('./images/case1.jpg') no-repeat center center; background-size: cover;">
                                            利于SEO优化
                                            <a href="./404.html" class="case-a"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="wrap-item ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="0.4s">
                                    <div class="wrap-item-content">
                                        <div class="text-hide case-box"
                                             style="background: url('./images/case2.jpg') no-repeat center center; background-size: cover;">
                                            利于SEO优化
                                            <a href="./404.html" class="case-a"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="wrap-item ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="0.6s">
                                    <div class="wrap-item-content">
                                        <div class="text-hide case-box"
                                             style="background: url('./images/case3.jpg') no-repeat center center; background-size: cover;">
                                            利于SEO优化
                                            <a href="./404.html" class="case-a"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="wrap-item ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="0.8s">
                                    <div class="wrap-item-content">
                                        <div class="text-hide case-box"
                                             style="background: url('./images/case4.jpg') no-repeat center center; background-size: cover;">
                                            利于SEO优化
                                            <a href="./404.html" class="case-a"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="wrap-item ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="1s">
                                    <div class="wrap-item-content">
                                        <div class="text-hide case-box"
                                             style="background: url('./images/case5.jpg') no-repeat center center; background-size: cover;">
                                            利于SEO优化
                                            <a href="./404.html" class="case-a"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="wrap-item ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="1.2s">
                                    <div class="wrap-item-content">
                                        <div class="text-hide case-box"
                                             style="background: url('./images/case6.jpg') no-repeat center center; background-size: cover;">
                                            利于SEO优化
                                            <a href="./404.html" class="case-a"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="wrap-item ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="1.4s">
                                    <div class="wrap-item-content">
                                        <div class="text-hide case-box"
                                             style="background: url('./images/case7.jpg') no-repeat center center; background-size: cover;">
                                            利于SEO优化
                                            <a href="./404.html" class="case-a"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="wrap-item ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="1.6s">
                                    <div class="wrap-item-content">
                                        <div class="text-hide case-box"
                                             style="background: url('./images/case8.jpg') no-repeat center center; background-size: cover;">
                                            利于SEO优化
                                            <a href="./404.html" class="case-a"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex pt-3 pt-md-5 justify-content-center">
                        <div class="wrap-next text-hide">下一页</div>
                    </div>
                </div>
            </section>
        </div>
        <div class="swiper-slide">
            {{--    解决方案--}}
            <section class="solu-wrap">
                <div class="main-view">
                    <div class="main-section">
                        <h1 class="ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                            swiper-animate-delay="0.2s">THE SOLUTION</h1>
                        <div class="main-section-line ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s"
                             swiper-animate-delay="0.2s"><span></span></div>
                        <p class="main-section-title ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                           swiper-animate-delay="0.2s">解决方案</p>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="card ani" swiper-animate-effect="slideInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="0.2s">
                                    <img class="card-img-top" src="{{asset('index/images/solu1.png')}}" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">智能硬件行业</h5>
                                        <p class="card-text">智能硬件应用设计开发方案是 WiFi/4G 无线控制管理平台，通过移动终端，监控各种智能设备，并实现设备之间的互联互通，为用户提供多元的情景生活体验。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="card ani" swiper-animate-effect="slideInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="0.4s">
                                    <img class="card-img-top" src="{{asset('index/images/solu2.png')}}" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">移动电商行业</h5>
                                        <p class="card-text">提供移动电商/商城APP及小程序设计开发解决方案，为企业定制个性化电子商务平台，拥有多个电商小程序、微分销商城、电商APP定制成功案例。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="card ani" swiper-animate-effect="slideInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="0.6s">
                                    <img class="card-img-top" src="{{asset('index/images/solu3.png')}}" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">数字金融行业</h5>
                                        <p class="card-text">提供网上支付、移动支付、网上银行、金融服务外包及网上贷款、网上保险、网上基金等互联网金融产品的设计开发解决方案。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="card ani" swiper-animate-effect="slideInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="0.8s">
                                    <img class="card-img-top" src="{{asset('index/images/solu4.png')}}" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">网络营销行业</h5>
                                        <p class="card-text">基于互联网络及社会关系网络连接企业、用户及公众，向用户及公众传递有价值的信息和服务，为实现顾客价值及企业营销目标所进行的规划、实施及运营管理活动。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="swiper-slide">

            {{--    新闻资讯--}}
            <section class="news-wrap">
                <div class="main-view">
                    <div class="main-section">
                        <h1 class="ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                            swiper-animate-delay="0.2s">LATEST NEWS</h1>
                        <div class="main-section-line ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s"
                             swiper-animate-delay="0.2s"><span></span></div>
                        <p class="main-section-title ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                           swiper-animate-delay="0.2s">最新资讯</p>
                        {{-- tabs--}}
                        <ul class="nav news-nav mb-3" id="news-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="company-news-tab" data-toggle="pill" href="#company-news-content"
                                   role="tab" aria-controls="company-news-content" aria-selected="true">公司新闻</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="industry-trends-tab" data-toggle="pill" href="#industry-trends-content"
                                   role="tab" aria-controls="industry-trends-content" aria-selected="false">行业动态</a>
                            </li>
                        </ul>
                        {{-- 下一页 上一页--}}
                        <div class="w-75 d-flex justify-content-md-end justify-content-center mt-2">
                            <div class="news-prev iconfont">&#xe764;</div>
                            <div class="news-content"><span></span><span class="active"></span><span></span><span></span></div>
                            <div class="news-next iconfont">&#xe765;</div>
                        </div>
                    </div>
                    <div class="tab-content" id="news-tabContent">
                        {{-- 公司新闻--}}
                        <div class="tab-pane fade show active" id="company-news-content" role="tabpanel"
                             aria-labelledby="ompany-news-tab">
                            <div class="container-fluid">
                                <div class="row news-list">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                        <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                             swiper-animate-delay="0.2s">
                                            <div class="card-img-top">
                                                <img class="" src="{{asset('index/images/case8.jpg')}}" width="100%" height="100%" alt="Card image cap">
                                                <a href="/404.html" class="news-a"></a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Card titleCard titleCard titleCard titleCard titleCard
                                                    title
                                                </h5>
                                                <p class="card-subtitle text-center text-96">2019/03/03</p>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                                    of
                                                    the
                                                    card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                        <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                             swiper-animate-delay="0.4s">
                                            <div class="card-img-top">
                                                <img class="" src="./images/case8.jpg" width="100%" height="100%" alt="Card image cap">
                                                <a href="/404.html" class="news-a"></a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Card titleCard titleCard titleCard titleCard titleCard
                                                    title
                                                </h5>
                                                <p class="card-subtitle text-center text-96">2019/03/03</p>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                                    of
                                                    the
                                                    card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                        <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                             swiper-animate-delay="0.6s">
                                            <div class="card-img-top">
                                                <img class="" src="./images/case8.jpg" width="100%" height="100%" alt="Card image cap">
                                                <a href="/404.html" class="news-a"></a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Card titleCard titleCard titleCard titleCard titleCard
                                                    title
                                                </h5>
                                                <p class="card-subtitle text-center text-96">2019/03/03</p>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                                    of
                                                    the
                                                    card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                        <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                             swiper-animate-delay="0.8s">
                                            <div class="card-img-top">
                                                <img class="" src="./images/case8.jpg" width="100%" height="100%" alt="Card image cap">
                                                <a href="/404.html" class="news-a"></a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Card titleCard titleCard titleCard titleCard titleCard
                                                    title
                                                </h5>
                                                <p class="card-subtitle text-center text-96">2019/03/03</p>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                                    of
                                                    the
                                                    card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- 行业动态--}}
                        <div class="tab-pane fade" id="industry-trends-content" role="tabpanel"
                             aria-labelledby="industry-trends-tab">
                            <div class="comtainer">
                                <div class="row news-list">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                        <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                             swiper-animate-delay="0.2s">
                                            <div class="card-img-top">
                                                <img class="" src="./images/case7.jpg" width="100%" height="100%" alt="Card image cap">
                                                <a href="/404.html" class="news-a"></a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Card titleCard titleCard titleCard titleCard titleCard
                                                    title
                                                </h5>
                                                <p class="card-subtitle text-center text-96">2019/03/03</p>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                                    of
                                                    the
                                                    card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                        <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                             swiper-animate-delay="0.4s">
                                            <div class="card-img-top">
                                                <img class="" src="./images/case7.jpg" width="100%" height="100%" alt="Card image cap">
                                                <a href="/404.html" class="news-a"></a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Card titleCard titleCard titleCard titleCard titleCard
                                                    title
                                                </h5>
                                                <p class="card-subtitle text-center text-96">2019/03/03</p>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                                    of
                                                    the
                                                    card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                        <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                             swiper-animate-delay="0.6s">
                                            <div class="card-img-top">
                                                <img class="" src="./images/case7.jpg" width="100%" height="100%" alt="Card image cap">
                                                <a href="/404.html" class="news-a"></a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Card titleCard titleCard titleCard titleCard titleCard
                                                    title
                                                </h5>
                                                <p class="card-subtitle text-center text-96">2019/03/03</p>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                                    of
                                                    the
                                                    card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                        <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                             swiper-animate-delay="0.8s">
                                            <div class="card-img-top">
                                                <img class="" src="./images/case7.jpg" width="100%" height="100%" alt="Card image cap">
                                                <a href="/404.html" class="news-a"></a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Card titleCard titleCard titleCard titleCard titleCard
                                                    title
                                                </h5>
                                                <p class="card-subtitle text-center text-96">2019/03/03</p>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                                    of
                                                    the
                                                    card's content.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div class="swiper-slide">
            {{--  关于我们  --}}
            <section class="about-wrap">
                <div class="main-view">
                    <div class="main-section">
                        <h1 class="ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                            swiper-animate-delay="0.2s">ABOUT US</h1>
                        <div class="main-section-line ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s"
                             swiper-animate-delay="0.2s"><span></span></div>
                        <p class="main-section-title ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                           swiper-animate-delay="0.2s">关于我们</p>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-12 order-md-1 order-12 d-flex justify-content-center">
                                <div class="about-left">
                                    <h5 class="mb-sm-5 mb-3 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                        swiper-animate-delay="0.2s">重庆普擎科技有限公司</h5>
                                    <p class="ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                       swiper-animate-delay="0.4s">重庆普擎科技成立于2019年,由4位对生活的充满激情,对工作充满经验的年轻人创建,
                                        公司秉承着用最好的态度给客户最好的服务理念,将客户的问题作为自己的目标,把每一位 客户心中所想的构架进行组建成他们心中最理想的大厦，
                                        我们拥有经验丰厚的网站视觉设计师,从业 工作5年以上,经历过社会的毒打,成就了他今日打造视觉盛宴的资本,我们拥有优秀的网站开发团队,
                                        人均从业3年以上, 他们分别从事过小程序开发,商城开发,定制专题网站开发,以及无数公司官网开发,他们确信着细节决定成败,
                                        因此会成为客户心中理想大厦的坚实地基。 </p>
                                    <p class="ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                       swiper-animate-delay="0.6s">
                                        梦想，历久而弥新。
                                        你我携手的身影，曾出现在一次次互联网变迁中。
                                        从携手共进，到相聚共赢。每一次认可，对我们而言都弥足珍贵。

                                        今天，予新而聚变。
                                        我们齐肩并歩，再一次为超越梦想而改变。
                                        从真实行动，到共赢未来。每一次前行，责任都将成为永恒的使命。

                                        2019，普擎与你一起，赢.聚变..</p>

                                    <div class="wrap-info text-hide mt-sm-5 mt-3 ani" swiper-animate-effect="fadeInLeft"
                                         swiper-animate-duration="0.5s" swiper-animate-delay="0.8s">关于普擎</div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 order-md-12 order-1 d-flex justify-content-center align-items-center">
                                <div class="about-right ani" class="ani" swiper-animate-effect="fadeInRight"
                                     swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">
                                    <img src="{{asset('index/images/about-img.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="swiper-slide">
            {{--  合作伙伴  --}}
            <section class="part-wrap">
                <div class="main-view">
                    <div class="main-section">
                        <h1 class="ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                            swiper-animate-delay="0.2s">PARTNERS</h1>
                        <div class="main-section-line ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s"
                             swiper-animate-delay="0.2s"><span></span></div>
                        <p class="main-section-title" class="ani" swiper-animate-effect="fadeInRight"
                           swiper-animate-duration="0.5s" swiper-animate-delay="0.2s">合作伙伴</p>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="0.2s"><a href="http://www.lanceyi.com" target="_blank"><img
                                            src="{{asset('index/images/part1.jpg')}}" width="100%" alt=""></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="0.4s"><a href="http://www.lanceyi.com" target="_blank"><img
                                            src="{{asset('index/images/part2.jpg')}}" width="100%" alt=""></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="0.6s"><a href="http://www.lanceyi.com" target="_blank"><img
                                            src="{{asset('index/images/part3.jpg')}}" width="100%" alt=""></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="0.8s"><a href="http://www.lanceyi.com" target="_blank"><img
                                            src="{{asset('index/images/part4.jpg')}}" width="100%" alt=""></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="1s"><a href="http://www.lanceyi.com" target="_blank"><img
                                            src="{{asset('index/images/part5.jpg')}}" width="100%" alt=""></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="1.2s"><a href="http://www.lanceyi.com" target="_blank"><img
                                            src="{{asset('index/images/part6.jpg')}}" width="100%" alt=""></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="1.4s"><a href="http://www.lanceyi.com" target="_blank"><img
                                            src="{{asset('index/images/part7.jpg')}}" width="100%" alt=""></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="1.6s"><a href="http://www.lanceyi.com" target="_blank"><img
                                            src="{{asset('index/images/part8.jpg')}}" width="100%" alt=""></a></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{-- footer --}}
            @include('index.public.footer')
        {{-- footer end --}}
    </div>
    {{-- Add Pagination --}}
    {{-- <div class="swiper-pagination"></div> --}}
</main>
@endsection

{{-- js --}}
@section('js')
    <script src="{{asset('index/js/lib/swiper.min.js')}}"></script>
    <script src="{{asset('index/js/lib/swiper.animate.min.js')}}"></script>
    <script src="{{asset('index/js/main.js')}}"></script>
@endsection
