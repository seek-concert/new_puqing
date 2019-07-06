{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="/index/css/index_style.css">
    <link rel="stylesheet" href="/index/css/main.css">
@endsection

{{-- Content --}}
@section('content')
<main class="main-body swiper-container swiper-container-v">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            {{--  banner--}}
            <section class="banner swiper-container swiper-container-h">
                <div class="swiper-wrapper">
                    @if(!empty($banner_lists))
                        @foreach ($banner_lists as $value)
                            <div class="swiper-slide" onclick="location.href='{{$value->url}}'">
                                <img src="{{$value->img?:'index/images/banner.jpg'}}" alt="banner1">
                            </div>
                        @endforeach
                    @endif
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
                    <div class="text-ft-h1 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                        swiper-animate-delay="0.2s">DEVELOP BUSINESS</div>
                    <div class="main-section-line ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s"
                         swiper-animate-delay="0.2s"><span></span></div>
                    <p class="main-section-title ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                       swiper-animate-delay="0.2s">开发业务</p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12 pb-3" onclick="location.href='{{url('/web')}}'">
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
                        <div class="col-lg-4 col-md-6 col-12 pb-3" onclick="location.href='{{url('/wechat')}}'">
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
                        <div class="col-lg-4 col-md-12 col-12 pb-3" onclick="location.href='{{url('/app')}}'">
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
                        <div class="text-ft-h1 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                            swiper-animate-delay="0.2s">SUCCESSFUL CASE</div>
                        <div class="main-section-line ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s"
                             swiper-animate-delay="0.2s"><span></span></div>
                        <p class="main-section-title ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                           swiper-animate-delay="0.2s">成功案例</p>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            @if(!empty($case_lists))
                                @foreach ($case_lists as $value)
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                        <div class="wrap-item ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                             swiper-animate-delay="0.2s">
                                            <div class="wrap-item-content">
                                                <div class="text-hide case-box"
                                                     style="background: url('{{$value->thumbnail}}') no-repeat center center; background-size: cover;">
                                                    重庆网站建设外包案例-{{$value->title}}
                                                    <a href="{{url('case_info',[$value->id])}}" class="case-a"  title="{{ $value->keywords}}"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                             @endif
                        </div>
                    </div>
                    <div class="d-flex pt-3 pt-md-5 justify-content-center"  onclick="location.href='{{url('/case')}}'" title="查看更多网站建设成功案例">
                        <div class="wrap-next text-hide">more</div>
                    </div>
                </div>
            </section>
        </div>
        <div class="swiper-slide">
            {{--    解决方案--}}
            <section class="solu-wrap">
                <div class="main-view">
                    <div class="main-section">
                        <div class="text-ft-h1 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                            swiper-animate-delay="0.2s">THE SOLUTION</div>
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
                                    <img class="card-img-top" src="{{asset('index/images/solu1.png')}}" alt="智能硬件行业">
                                    <div class="card-body">
                                        <h5 class="card-title">智能硬件行业</h5>
                                        <p class="card-text">智能硬件应用设计开发方案是 WiFi/4G 无线控制管理平台，通过移动终端，监控各种智能设备，并实现设备之间的互联互通，为用户提供多元的情景生活体验。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="card ani" swiper-animate-effect="slideInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="0.4s">
                                    <img class="card-img-top" src="{{asset('index/images/solu2.png')}}" alt="移动电商行业">
                                    <div class="card-body">
                                        <h5 class="card-title">移动电商行业</h5>
                                        <p class="card-text">提供移动电商/商城APP及小程序设计开发解决方案，为企业定制个性化电子商务平台，拥有多个电商小程序、微分销商城、电商APP定制成功案例。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="card ani" swiper-animate-effect="slideInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="0.6s">
                                    <img class="card-img-top" src="{{asset('index/images/solu3.png')}}" alt="数字金融行业">
                                    <div class="card-body">
                                        <h5 class="card-title">数字金融行业</h5>
                                        <p class="card-text">提供网上支付、移动支付、网上银行、金融服务外包及网上贷款、网上保险、网上基金等互联网金融产品的设计开发解决方案。</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                <div class="card ani" swiper-animate-effect="slideInUp" swiper-animate-duration="0.5s"
                                     swiper-animate-delay="0.8s">
                                    <img class="card-img-top" src="{{asset('index/images/solu4.png')}}" alt="网络营销行业">
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
                        <div class="text-ft-h1 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                            swiper-animate-delay="0.2s">LATEST NEWS</div>
                        <div class="main-section-line ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s"
                             swiper-animate-delay="0.2s"><span></span></div>
                        <p class="main-section-title ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                           swiper-animate-delay="0.2s">最新资讯</p>
                        <!-- tabs-->
                        <ul class="nav news-nav mb-3" id="news-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="company-news-tab" data-toggle="pill" href="#company-news-content"
                                   role="tab" aria-controls="company-news-content" aria-selected="true">行业动态</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="industry-trends-tab" data-toggle="pill" href="#industry-trends-content"
                                   role="tab" aria-controls="industry-trends-content" aria-selected="false">公司新闻</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="news-tabContent">
                        <!-- 行业动态-->
                        <div class="tab-pane fade show active" id="company-news-content" role="tabpanel"
                             aria-labelledby="ompany-news-tab">
                            <!-- 滑动容器 -->
                            <div class="swiper-container swiper-container-news">
                                <!-- 下一页 上一页-->
                                <div class="d-flex justify-content-md-end justify-content-center mb-2">
                                    <div class="iconfont swiper-button-prev-news">&#xe764;</div>
                                    <div class="news-content swiper-pagination-news"></div>
                                    <div class="iconfont swiper-button-next-news">&#xe765;</div>
                                </div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="container-fluid">
                                            <div class="row news-list">
                                                @if(!empty($industry_news))
                                                    @foreach($industry_news as $k=>$v)
                                                        @if(in_array($k,[0,1,2,3]))
                                                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                                                <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                                                     swiper-animate-delay="0.2s">
                                                                    <div class="card-img-top">
                                                                        <img class="" src="{{$v->thumbnail?:'index/images/case8.jpg'}}" width="100%" height="100%" alt="{{$v->keywords?:'重庆网站建设外包服务img'}}">
                                                                        <a href="{{url('/news_info',['id'=>$v->id])}}" class="news-a" title="{{$v->keywords?:'重庆网站建设外包服务img'}}"></a>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title text-center">{{$v->title}}</h5>
                                                                        <p class="card-subtitle text-center text-96">{{date('Y-m-d',$v->input_time)}}</p>
                                                                        <p class="card-text">{{$v->description}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="container-fluid">
                                            <div class="row news-list">
                                                @if(!empty($industry_news))
                                                    @foreach($industry_news as $k=>$v)
                                                        @if(in_array($k,[4,5,6,7]))
                                                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                                                <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                                                     swiper-animate-delay="0.2s">
                                                                    <div class="card-img-top">
                                                                        <img class="" src="{{$v->thumbnail?:'index/images/case8.jpg'}}" width="100%" height="100%" alt="{{$v->keywords?:'重庆网站建设外包服务img'}}">
                                                                        <a href="{{url('/news_info',['id'=>$v->id])}}" class="news-a" title="{{$v->keywords?:'重庆网站建设外包服务img'}}"></a>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title text-center">{{$v->title}}</h5>
                                                                        <p class="card-subtitle text-center text-96">{{date('Y-m-d',$v->input_time)}}</p>
                                                                        <p class="card-text">{{$v->description}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="container-fluid">
                                            <div class="row news-list">
                                                @if(!empty($industry_news))
                                                    @foreach($industry_news as $k=>$v)
                                                        @if(in_array($k,[8,9,10,11]))
                                                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                                                <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                                                     swiper-animate-delay="0.2s">
                                                                    <div class="card-img-top">
                                                                        <img class="" src="{{$v->thumbnail?:'index/images/case8.jpg'}}" width="100%" height="100%" alt="{{$v->keywords?:'重庆网站建设外包服务img'}}">
                                                                        <a href="{{url('/news_info',['id'=>$v->id])}}" class="news-a" title="{{$v->keywords?:'重庆网站建设外包服务img'}}"></a>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title text-center">{{$v->title}}</h5>
                                                                        <p class="card-subtitle text-center text-96">{{date('Y-m-d',$v->input_time)}}</p>
                                                                        <p class="card-text">{{$v->description}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 公司新闻-->
                        <div class="tab-pane fade" id="industry-trends-content" role="tabpanel"
                             aria-labelledby="industry-trends-tab">
                            <!-- 滑动容器 -->
                            <div class="swiper-container swiper-container-industry">
                                <!-- 下一页 上一页-->
                                <div class="d-flex justify-content-md-end justify-content-center mb-2 ">
                                    <div class="iconfont swiper-button-prev-industry">&#xe764;</div>
                                    <div class="news-content swiper-pagination-industry"></div>
                                    <div class="iconfont swiper-button-next-industry">&#xe765;</div>
                                </div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="container-fluid">
                                            <div class="row news-list">
                                                @if(!empty($company_news))
                                                    @foreach($company_news as $k=>$v)
                                                        @if(in_array($k,[0,1,2,3]))
                                                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                                                <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                                                     swiper-animate-delay="0.2s">
                                                                    <div class="card-img-top">
                                                                        <img class="" src="{{$v->thumbnail?:'index/images/case8.jpg'}}" width="100%" height="100%" alt="{{$v->keywords?:'重庆网站建设外包服务img'}}">
                                                                        <a href="{{url('/news_info',['id'=>$v->id])}}" class="news-a" title="{{$v->keywords?:'重庆网站建设外包服务img'}}"></a>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title text-center">{{$v->title}}</h5>
                                                                        <p class="card-subtitle text-center text-96">{{date('Y-m-d',$v->input_time)}}</p>
                                                                        <p class="card-text">{{$v->description}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="container-fluid">
                                            <div class="row news-list">
                                                @if(!empty($company_news))
                                                    @foreach($company_news as $k=>$v)
                                                        @if(in_array($k,[4,5,6,7]))
                                                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                                                <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                                                     swiper-animate-delay="0.2s">
                                                                    <div class="card-img-top">
                                                                        <img class="" src="{{$v->thumbnail?:'index/images/case8.jpg'}}" width="100%" height="100%" alt="{{$v->keywords?:'重庆网站建设外包服务img'}}">
                                                                        <a href="{{url('/news_info',['id'=>$v->id])}}" class="news-a" title="{{$v->keywords?:'重庆网站建设外包服务img'}}"></a>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title text-center">{{$v->title}}</h5>
                                                                        <p class="card-subtitle text-center text-96">{{date('Y-m-d',$v->input_time)}}</p>
                                                                        <p class="card-text">{{$v->description}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="container-fluid">
                                            <div class="row news-list">
                                                @if(!empty($company_news))
                                                    @foreach($company_news as $k=>$v)
                                                        @if(in_array($k,[8,9,10,11]))
                                                            <div class="col-lg-3 col-md-6 col-sm-6 col-12 pb-3">
                                                                <div class="card ani" swiper-animate-effect="fadeInDown" swiper-animate-duration="0.5s"
                                                                     swiper-animate-delay="0.2s">
                                                                    <div class="card-img-top">
                                                                        <img class="" src="{{$v->thumbnail?:'index/images/case8.jpg'}}" width="100%" height="100%" alt="{{$v->keywords?:'重庆网站建设外包服务img'}}">
                                                                        <a href="{{url('/news_info',['id'=>$v->id])}}" class="news-a" title="{{$v->keywords?:'重庆网站建设外包服务img'}}"></a>
                                                                    </div>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title text-center">{{$v->title}}</h5>
                                                                        <p class="card-subtitle text-center text-96">{{date('Y-m-d',$v->input_time)}}</p>
                                                                        <p class="card-text">{{$v->description}}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif
                                                    @endforeach
                                                @endif
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
                        <div class="text-ft-h1 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                            swiper-animate-delay="0.2s">ABOUT US</div>
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
                                    <img src="{{asset('index/images/about-img.png')}}" alt="关于普擎">
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
                        <div class="text-ft-h1 ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                            swiper-animate-delay="0.2s">PARTNERS</div>
                        <div class="main-section-line ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s"
                             swiper-animate-delay="0.2s"><span></span></div>
                        <p class="main-section-title" class="ani" swiper-animate-effect="fadeInRight"
                           swiper-animate-duration="0.5s" swiper-animate-delay="0.2s">合作伙伴</p>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="0.2s"><a href="javascript:void(0);" target="_blank"><img
                                            src="{{asset('index/images/part1.jpg')}}" width="100%" alt="Cooperation"></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="0.4s"><a href="javascript:void(0);" target="_blank"><img
                                            src="{{asset('index/images/part2.jpg')}}" width="100%" alt="Cooperation"></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="0.6s"><a href="javascript:void(0);" target="_blank"><img
                                            src="{{asset('index/images/part3.jpg')}}" width="100%" alt="Cooperation"></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="0.8s"><a href="javascript:void(0);" target="_blank"><img
                                            src="{{asset('index/images/part4.jpg')}}" width="100%" alt="Cooperation"></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="1s"><a href="javascript:void(0);" target="_blank"><img
                                            src="{{asset('index/images/part5.jpg')}}" width="100%" alt="Cooperation"></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="1.2s"><a href="javascript:void(0);" target="_blank"><img
                                            src="{{asset('index/images/part6.jpg')}}" width="100%" alt="Cooperation"></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="1.4s"><a href="javascript:void(0);" target="_blank"><img
                                            src="{{asset('index/images/part7.jpg')}}" width="100%" alt="Cooperation"></a></div>
                            <div class="col-sm-3 col-6 pb-3 ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
                                 swiper-animate-delay="1.6s"><a href="javascript:void(0);" target="_blank"><img
                                            src="{{asset('index/images/part8.jpg')}}" width="100%" alt="Cooperation"></a></div>
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
    <script src="/index/js/index.js"></script>
@endsection
