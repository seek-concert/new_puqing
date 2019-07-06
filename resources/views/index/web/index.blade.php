{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="/index/css/swiper.min.css">
    <link rel="stylesheet" href="/index/css/animate.min.css">
    <link rel="stylesheet" href="/index/css/web-site.css">
@endsection

{{-- Content --}}
@section('content')
    <main class="mian-body swiper-container swiper-container-v">
        <div class="swiper-wrapper">
            {{-- 网站商城 --}}
            <div class="swiper-slide">
                <section class="site-wrap site-wrap-1">
                    <div class="container main-view">
                        <div class="row wrap-row">
                            <div class="site-content col-md-6 col-12 order-md-1 order-12">
                                <div class="text-ft-h1 site-content-title ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                    swiper-animate-delay="0.2s">商城网站</div>
                                <h2 class="site-content-subtitle site-content-subtitle-1 ani" swiper-animate-effect="fadeInLeft"
                                    swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">B2B商城、B2B2C商城、分销商城</h2>
                                <p class="site-content-text ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.6s">这是一段商城网站的文案介绍这是一段商城网站的文案介绍这是一段商城网站的文案介绍</p>
                                <a href="{{url('/web_site_shop_web')}}" class="site-btn-link ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.8s">查看详情</a>
                            </div>
                            <div class="site-pic site-pic-1 col-md-6 col-12 order-md-12 order-1 ani"
                                 swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
                        </div>
                    </div>
                </section>
            </div>
            {{-- 企业官网 --}}
            <div class="swiper-slide">
                <section class="site-wrap site-wrap-2">
                    <div class="container main-view">
                        <div class="row wrap-row">
                            <div class="site-content col-md-6 col-12 order-md-12 order-12">
                                <div class="text-ft-h1 site-content-title ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                                    swiper-animate-delay="0.2s">企业官网</div>
                                <h2 class="site-content-subtitle site-content-subtitle-2 ani" swiper-animate-effect="fadeInRight"
                                    swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">全球最大的建站平台</h2>
                                <p class="site-content-text ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.6s">我们和客户探讨,针对客户需求,为客户设计优秀企业官网视觉效果,针对客户特殊性，进行定制型开发。。。</p>
                                <a href="{{url('/web_site_company_web')}}" class="site-btn-link ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.8s">查看详情</a>
                            </div>
                            <div class="site-pic site-pic-2 col-md-6 col-12 order-md-1 order-1 ani" swiper-animate-effect="fadeInLeft"
                                 swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
                        </div>
                    </div>
                </section>
            </div>
            {{-- 手机网站 --}}
            <div class="swiper-slide">
                <section class="site-wrap site-wrap-3">
                    <div class="container main-view">
                        <div class="row wrap-row">
                            <div class="site-content col-md-6 col-12 order-md-1 order-12">
                                <div class="text-ft-h1 site-content-title ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                    swiper-animate-delay="0.2s">手机网站</div>
                                <h2 class="site-content-subtitle site-content-subtitle-3 ani" swiper-animate-effect="fadeInLeft"
                                    swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">全球最大的建站平台</h2>
                                <p class="site-content-text ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.6s">我们和客户探讨,针对客户需求,为客户设计优秀企业官网视觉效果,针对客户特殊性，进行定制型开发。。。</p>
                                <a href="{{url('/web_site_html5')}}" class="site-btn-link ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.8s">查看详情</a>
                            </div>
                            <div class="site-pic site-pic-3 col-md-6 col-12 order-md-12 order-1 ani"
                                 swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
                        </div>
                    </div>
                </section>
            </div>
            {{-- 门户网站 --}}
            <div class="swiper-slide">
                <section class="site-wrap site-wrap-4">
                    <div class="container main-view">
                        <div class="row wrap-row">
                            <div class="site-content col-md-6 col-12 order-md-12 order-12">
                                <div class="text-ft-h1 site-content-title ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                                    swiper-animate-delay="0.2s">门户网站</div>
                                <h2 class="site-content-subtitle site-content-subtitle-4 ani" swiper-animate-effect="fadeInRight"
                                    swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">全球最大的建站平台</h2>
                                <p class="site-content-text ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.6s">我们和客户探讨,针对客户需求,为客户设计优秀企业官网视觉效果,针对客户特殊性，进行定制型开发。。。</p>
                                <a href="{{url('/web_site_portal_web')}}" class="site-btn-link ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.8s">查看详情</a>
                            </div>
                            <div class="site-pic site-pic-4 col-md-6 col-12 order-md-1 order-1 ani" swiper-animate-effect="fadeInLeft"
                                 swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
                        </div>
                    </div>
                </section>
            </div>
            {{-- 后台管理系统 --}}
            <div class="swiper-slide">
                <section class="site-wrap site-wrap-5">
                    <div class="container main-view">
                        <div class="row wrap-row">
                            <div class="site-content col-md-5 col-12 order-md-1 order-12">
                                <div class="text-ft-h1 site-content-title ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                    swiper-animate-delay="0.2s">后台管理系统</div>
                                <h2 class="site-content-subtitle site-content-subtitle-5 ani" swiper-animate-effect="fadeInLeft"
                                    swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">全球最大的建站平台</h2>
                                <p class="site-content-text ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.6s">我们和客户探讨,针对客户需求,为客户设计优秀企业官网视觉效果,针对客户特殊性，进行定制型开发。。。</p>
                                <a href="{{url('/web_site_admin')}}" class="site-btn-link ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.8s">查看详情</a>
                            </div>
                            <div class="site-pic site-pic-5 col-md-7 col-12 order-md-12 order-1 ani"
                                 swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
                        </div>
                    </div>
                </section>
            </div>
            {{-- 联系我们 --}}
                @include('index.public.contact_us')
             {{-- footer --}}
                @include('index.public.footer')
             {{-- footer end --}}
        </div>
    </main>
    {{-- 左边导航 --}}
    <div class="dual dual-left d-none d-md-block">
        <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(0)">
            <span>商城网站</span>
            <div class="dual dual-left-img">
                <img src="{{asset('index/images/website/Bag.png')}}" alt="普擎科技专注网站建设外包服务">
            </div>
        </a>
        <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(1)">
            <span>企业官网</span>
            <div class="dual dual-left-img">
                <img src="{{asset('index/images/website/Laptop.png')}}" alt="普擎科技专注网站建设外包服务">
            </div>
        </a>
        <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(2)">
            <span>手机网站</span>
            <div class="dual dual-left-img">
                <img src="{{asset('index/images/website/mobilephole.png')}}" alt="普擎科技专注网站建设外包服务">
            </div>
        </a>
        <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(3)">
            <span>门户网站</span>
            <div class="dual dual-left-img">
                <img src="{{asset('index/images/website/Home.png')}}" alt="普擎科技专注网站建设外包服务">
            </div>
        </a>
        <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(4)">
            <span>后台管理系统</span>
            <div class="dual dual-left-img">
                <img src="{{asset('index/images/website/Monitor.png')}}" alt="普擎科技专注网站建设外包服务">
            </div>
        </a>
    </div>
@endsection

{{-- js --}}
@section('js')
    <script src="/index/js/lib/swiper.min.js"></script>
    <script src="/index/js/lib/swiper.animate.min.js"></script>
    <script src="/index/js/commonSwiper.js"></script>
@endsection
