{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="{{asset('index/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/web-site.css')}}">
@endsection

{{-- Content --}}
@section('content')
    <main class="mian-body swiper-container swiper-container-v">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <!-- 网站商城 -->
                <section class="site-wrap site-wrap-1">
                    <div class="container main-view">
                        <div class="row wrap-row">
                            <div class="site-content col-md-6 col-12 order-md-1 order-12">
                                <h1 class="site-content-title ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                    swiper-animate-delay="0.2s">商城网站</h1>
                                <h2 class="site-content-subtitle site-content-subtitle-1 ani" swiper-animate-effect="fadeInLeft"
                                    swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">B2B商城、B2B2C商城、分销商城</h2>
                                <p class="site-content-text ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.6s">这是一段商城网站的文案介绍这是一段商城网站的文案介绍这是一段商城网站的文案介绍</p>
                                <a href="" class="site-btn-link ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.8s">查看详情</a>
                            </div>
                            <div class="site-pic site-pic-1 col-md-6 col-12 order-md-12 order-1 ani"
                                 swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <!-- 企业官网 -->
                <section class="site-wrap site-wrap-2">
                    <div class="container main-view">
                        <div class="row wrap-row">
                            <div class="site-content col-md-6 col-12 order-md-12 order-12">
                                <h1 class="site-content-title ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                                    swiper-animate-delay="0.2s">企业官网</h1>
                                <h2 class="site-content-subtitle site-content-subtitle-2 ani" swiper-animate-effect="fadeInRight"
                                    swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">全球最大的建站平台</h2>
                                <p class="site-content-text ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.6s">我们和客户探讨,针对客户需求,为客户设计优秀企业官网视觉效果,针对客户特殊性，进行定制型开发。。。</p>
                                <a href="" class="site-btn-link ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.8s">查看详情</a>
                            </div>
                            <div class="site-pic site-pic-2 col-md-6 col-12 order-md-1 order-1 ani" swiper-animate-effect="fadeInLeft"
                                 swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <!-- 手机网站 -->
                <section class="site-wrap site-wrap-3">
                    <div class="container main-view">
                        <div class="row wrap-row">
                            <div class="site-content col-md-6 col-12 order-md-1 order-12">
                                <h1 class="site-content-title ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                    swiper-animate-delay="0.2s">手机网站</h1>
                                <h2 class="site-content-subtitle site-content-subtitle-3 ani" swiper-animate-effect="fadeInLeft"
                                    swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">全球最大的建站平台</h2>
                                <p class="site-content-text ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.6s">我们和客户探讨,针对客户需求,为客户设计优秀企业官网视觉效果,针对客户特殊性，进行定制型开发。。。</p>
                                <a href="" class="site-btn-link ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.8s">查看详情</a>
                            </div>
                            <div class="site-pic site-pic-3 col-md-6 col-12 order-md-12 order-1 ani"
                                 swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <!-- 门户网站 -->
                <section class="site-wrap site-wrap-4">
                    <div class="container main-view">
                        <div class="row wrap-row">
                            <div class="site-content col-md-6 col-12 order-md-12 order-12">
                                <h1 class="site-content-title ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                                    swiper-animate-delay="0.2s">门户网站</h1>
                                <h2 class="site-content-subtitle site-content-subtitle-4 ani" swiper-animate-effect="fadeInRight"
                                    swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">全球最大的建站平台</h2>
                                <p class="site-content-text ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.6s">我们和客户探讨,针对客户需求,为客户设计优秀企业官网视觉效果,针对客户特殊性，进行定制型开发。。。</p>
                                <a href="" class="site-btn-link ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.8s">查看详情</a>
                            </div>
                            <div class="site-pic site-pic-4 col-md-6 col-12 order-md-1 order-1 ani" swiper-animate-effect="fadeInLeft"
                                 swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="swiper-slide">
                <!-- 后台管理系统 -->
                <section class="site-wrap site-wrap-5">
                    <div class="container main-view">
                        <div class="row wrap-row">
                            <div class="site-content col-md-5 col-12 order-md-1 order-12">
                                <h1 class="site-content-title ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                    swiper-animate-delay="0.2s">后台管理系统</h1>
                                <h2 class="site-content-subtitle site-content-subtitle-5 ani" swiper-animate-effect="fadeInLeft"
                                    swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">全球最大的建站平台</h2>
                                <p class="site-content-text ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.6s">我们和客户探讨,针对客户需求,为客户设计优秀企业官网视觉效果,针对客户特殊性，进行定制型开发。。。</p>
                                <a href="" class="site-btn-link ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                                   swiper-animate-delay="0.8s">查看详情</a>
                            </div>
                            <div class="site-pic site-pic-5 col-md-7 col-12 order-md-12 order-1 ani"
                                 swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- 联系我们 -->
            <section class="swiper-slide main-contact">
                <div class="main-view d-flex align-items-center flex-column">
                    <div class="main-contact-title">联系我们</div>
                    <form class="main-contact-form container-fluid">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="contact-group">
                                    <label>姓 名： </label>
                                    <div class="contact-input">
                                        <input type="text" placeholder="name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="contact-group">
                                    <label>邮 箱： </label>
                                    <div class="contact-input">
                                        <input type="mail" placeholder="mail">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="contact-group">
                                    <label>电 话： </label>
                                    <div class="contact-input">
                                        <input type="text" placeholder="phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="contact-text-group">
                            <label>合 作 需 求： </label>
                            <div class="contact-textarea">
                                <textarea placeholder="textarea"></textarea>
                            </div>
                        </div>
                    </form>
                    <div class="main-contact-btn">
                        <span>提交</span>
                    </div>
                </div>
            </section>
            <!-- footer -->
            <footer class="swiper-slide main-footer">
                <div class="main-view">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-4 col-12 pb-3">
                                <div class="footer-box">
                                    <div class="footer-title">
                                        <h5>解决方案</h5>
                                        <a href="#">更多+</a>
                                    </div>
                                    <div class="footer-list">
                                        <a href="">企业网站建设解决方案</a>
                                        <a href="">企业网站建设解决方案</a>
                                        <a href="">企业网站建设解决方案</a>
                                        <a href="">企业网站建设解决方案</a>
                                        <a href="">企业网站建设解决方案</a>
                                        <a href="">企业网站建设解决方案</a>
                                        <a href="">企业网站建设解决方案</a>
                                        <a href="">企业网站建设解决方案</a>
                                        <a href="">企业网站建设解决方案</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12 pb-3">
                                <div class="footer-box">
                                    <div class="footer-title">
                                        <h5>我们的实力</h5>
                                        <a href="#">更多+</a>
                                    </div>
                                    <p class="footer-text">
                                        普擎10年专业互联网服务经验深圳高端建站设计团队资深行业分析策划B2C营销型网站建设领先者前沿视觉设计、研发能力前端代码深度符合SEO优化深圳市高新技术企业证书具有完备的项目管理完善的售后服务体系深厚的网络运营经验时刻新技术领先研发能力16个网站系统软件著作权
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-4 col-12 pb-3">
                                <div class="footer-box">
                                    <div class="footer-title">
                                        <h5>关于我们</h5>
                                        <a href="#">更多+</a>
                                    </div>
                                    <p class="footer-text">
                                        普擎网站设计，为客户量身定制各类网站建设业务，包括企业型、电子商务型、行业门户型、品牌建立型等各类网站，实战经验丰富，成功案例众多。以客户利益为出发点，牧羊人网站制作为客户规划、定制符合企业需求、带有营销价值的网络建站方案，提供从网站前期定位分析策划、技术架构，到网站界面设计...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="footer-link">
                            <h5>友情链接</h5>
                            <div class="link-list">
                                <a href="">link1</a>
                                <a href="">link1</a>
                            </div>
                        </div>
                        <p class="footer-text">重庆网站制作案例©2019 普擎科技设计 版权所有 | 普擎科技网站设计 http://p7ing.com</p>
                    </div>
                </div>
            </footer>
        </div>
    </main>
    <!-- 左边导航 -->
    <div class="dual dual-left d-none d-md-block">
        <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(0)">
            <span>商城网站</span>
            <div class="dual dual-left-img">
                <img src="{{asset('index/images/website/Bag.png')}}" alt="">
            </div>
        </a>
        <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(1)">
            <span>企业官网</span>
            <div class="dual dual-left-img">
                <img src="{{asset('index/images/website/Laptop.png')}}" alt="">
            </div>
        </a>
        <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(2)">
            <span>手机网站</span>
            <div class="dual dual-left-img">
                <img src="{{asset('index/images/website/mobilephole.png')}}" alt="">
            </div>
        </a>
        <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(3)">
            <span>门户网站</span>
            <div class="dual dual-left-img">
                <img src="{{asset('index/images/website/Home.png')}}" alt="">
            </div>
        </a>
        <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(4)">
            <span>后台管理系统</span>
            <div class="dual dual-left-img">
                <img src="{{asset('index/images/website/Monitor.png')}}" alt="">
            </div>
        </a>
    </div>
@endsection

{{-- js --}}
@section('js')
    <script src="{{asset('index/js/lib/swiper.min.js')}}"></script>
    <script src="{{asset('index/js/lib/swiper.animate.min.js')}}"></script>
    <script src="{{asset('index/js/commonSwiper.js')}}"></script>
@endsection
