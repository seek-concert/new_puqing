{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="{{asset('index/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/soft-creat.css')}}">
@endsection

{{-- Content --}}
@section('content')
<!-- 主体 -->
<main class="mian-body swiper-container swiper-container-v">
    <div class="swiper-wrapper">
        <!-- 原生APP -->
      <div class="swiper-slide">
        <section class="soft-wrap soft-wrap-1">
          <div class="container main-view">
            <div class="row wrap-row">
              <div class="soft-content col-md-6 col-12 order-md-1 order-12">
                <h1 class="soft-content-title ani" swiper-animate-effect="fadeInLeft"
                swiper-animate-duration="0.5s" swiper-animate-delay="0.2s">原生APP</h1>
                <h2 class="soft-content-subtitle soft-content-subtitle-1 ani" swiper-animate-effect="fadeInLeft"
                swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">专业高端定制式开发服务</h2>
                <p class="soft-content-text border border-white rounded p-1 ani" swiper-animate-effect="fadeInLeft"
                swiper-animate-duration="0.5s" swiper-animate-delay="0.6s">
                  按需定制&nbsp;&nbsp;快速上线&nbsp;&nbsp;售后支持&nbsp;&nbsp;满意再付款</p>
                <a href="" class="soft-btn-link ani" swiper-animate-effect="fadeInLeft"
                swiper-animate-duration="0.5s" swiper-animate-delay="0.8s">查看详情</a>
              </div>
              <div class="soft-pic soft-pic-1 col-md-6 col-12 order-md-12 order-1 ani" swiper-animate-effect="fadeInRight"
              swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
            </div>
          </div>
        </section>
      </div>
        <!-- WEB APP -->
      <div class="swiper-slide">
        <section class="soft-wrap soft-wrap-2">
          <div class="container main-view">
            <div class="row wrap-row">
              <div class="soft-content col-md-6 col-12 order-md-12 order-12">
                <h1 class="soft-content-title ani" swiper-animate-effect="fadeInRight"
                swiper-animate-duration="0.5s" swiper-animate-delay="0.2s">WEB APP</h1>
                <h2 class="soft-content-subtitle soft-content-subtitle-2 ani" swiper-animate-effect="fadeInRight"
                swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">快速上线，PC、手机、微信、三终端平台完美兼容</h2>
                <p class="soft-content-text ani" swiper-animate-effect="fadeInRight"
                swiper-animate-duration="0.5s" swiper-animate-delay="0.6s">我们和客户探讨,针对客户需求,为客户设计优秀企业官网视觉效果,针对客户特殊性，进行定制型开发。。。</p>
                <a href="" class="soft-btn-link ani" swiper-animate-effect="fadeInRight"
                swiper-animate-duration="0.5s" swiper-animate-delay="0.8s">查看详情</a>
              </div>
              <div class="soft-pic soft-pic-2 col-md-6 col-12 order-md-1 order-1 ani" swiper-animate-effect="fadeInLeft"
              swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
            </div>
          </div>
        </section>
      </div>
        <!-- 解决方案 -->
      <div class="swiper-slide">
        <section class="soft-wrap soft-wrap-3">
          <div class="container main-view">
            <h1 class="soft-title ani" swiper-animate-effect="fadeInDown"
            swiper-animate-duration="0.5s" swiper-animate-delay="0.2s">解决方案</h1>
            <div class="soft-soluwrap row wrap-row">
              <div class=" col-md-3 col-12 order-md-1 order-2 d-flex flex-column align-items-center">
                <div class="soft-soluwrap-item ani" swiper-animate-effect="fadeInLeft"
                swiper-animate-duration="0.5s" swiper-animate-delay="0.4s" >
                  <img src="./images/solu1.png" alt="">
                  <h5>智能硬件行业</h5>
                  <p>视频直播软件开发，什么最重要？反馈感，如何进一步增强直播反馈感是一个非常重要的课题，用户看直播。。。。。。</p>
                </div>
                <div class="soft-soluwrap-item ani" swiper-animate-effect="fadeInLeft"
                swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">
                  <img src="./images/solu2.png" alt="">
                  <h5>智能硬件行业</h5>
                  <p>视频直播软件开发，什么最重要？反馈感，如何进一步增强直播反馈感是一个非常重要的课题，用户看直播。。。。。。</p>
                </div>
              </div>
              <div class="soft-pic soft-pic-3 col-md-6 col-12 order-md-2 order-1 ani" swiper-animate-effect="fadeInUp"
              swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
              <div class="soft-pic col-md-3 col-12 order-md-3 order-3 d-flex flex-column align-items-center">
                <div class="soft-soluwrap-item ani" swiper-animate-effect="fadeInRight"
                swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">
                  <img src="./images/solu3.png" alt="">
                  <h5>智能硬件行业</h5>
                  <p>视频直播软件开发，什么最重要？反馈感，如何进一步增强直播反馈感是一个非常重要的课题，用户看直播。。。。。。</p>
                </div>
                <div class="soft-soluwrap-item ani" swiper-animate-effect="fadeInRight"
                swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">
                  <img src="./images/solu4.png" alt="">
                  <h5>智能硬件行业</h5>
                  <p>视频直播软件开发，什么最重要？反馈感，如何进一步增强直播反馈感是一个非常重要的课题，用户看直播。。。。。。</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
        <!-- 项目流程 -->
      <div class="swiper-slide">
        <section class="soft-wrap soft-wrap-4">
          <div class="container main-view">
            <h1 class="soft-title text-white ani" swiper-animate-effect="fadeInDown"
            swiper-animate-duration="0.5s" swiper-animate-delay="0.2s">项目流程</h1>
            <div class="soft-items row wrap-row">
              <div class="col-xl-2 col-lg-4 col-md-6 col-6 ani" swiper-animate-effect="fadeInUp"
              swiper-animate-duration="0.5s" swiper-animate-delay="0.1s">
                <div class="soft-items-box">
                  <img src="./images/softcreat/item-1.png" alt="">
                  <h1>01</h1>
                  <h2>用户访谈</h2>
                  <p>需求分析</p>
                  <p>需求评审</p>
                  <p>评审通过</p>
                </div>
              </div>
              <div class="col-xl-2 col-lg-4 col-md-6 col-6 ani" swiper-animate-effect="fadeInUp"
              swiper-animate-duration="0.5s" swiper-animate-delay="0.2s">
                <div class="soft-items-box">
                  <img src="./images/softcreat/item-2.png" alt="">
                  <h1>02</h1>
                  <h2>产品原型</h2>
                  <p>提供方案</p>
                  <p>原型设计</p>
                  <p>界面交互设计</p>
                </div>
              </div>
              <div class="col-xl-2 col-lg-4 col-md-6 col-6 ani" swiper-animate-effect="fadeInUp"
              swiper-animate-duration="0.5s" swiper-animate-delay="0.3s">
                <div class="soft-items-box">
                  <img src="./images/softcreat/item-3.png" alt="">
                  <h1>03</h1>
                  <h2>界面设计</h2>
                  <p>页面风格</p>
                  <p>创意展示</p>
                </div>
              </div>
              <div class="col-xl-2 col-lg-4 col-md-6 col-6 ani" swiper-animate-effect="fadeInUp"
              swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">
                <div class="soft-items-box">
                  <img src="./images/softcreat/item-4.png" alt="">
                  <h1>04</h1>
                  <h2>前端开发</h2>
                  <p>页面制作</p>
                  <p>浏览器兼容</p>
                  <p>测试反馈</p>
                  <p>修复BUG</p>
                </div>
              </div>
              <div class="col-xl-2 col-lg-4 col-md-6 col-6 ani" swiper-animate-effect="fadeInUp"
              swiper-animate-duration="0.5s" swiper-animate-delay="0.5s">
                <div class="soft-items-box">
                  <img src="./images/softcreat/item-5.png" alt="">
                  <h1>05</h1>
                  <h2>后端开发</h2>
                  <p>功能分解</p>
                  <p>开发编码</p>
                  <p>测试 发布</p>
                </div>
              </div>
              <div class="col-xl-2 col-lg-4 col-md-6 col-6 ani" swiper-animate-effect="fadeInUp"
              swiper-animate-duration="0.5s" swiper-animate-delay="0.6s">
                <div class="soft-items-box">
                  <img src="./images/softcreat/item-6.png" alt="">
                  <h1>06</h1>
                  <h2>测试报告</h2>
                  <p>运营推广</p>
                  <p>用户体验测试</p>
                  <p>项目总结</p>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- 联系我们 -->
         @include('index.public.contact_us')
       <!-- footer -->
         @include('index.public.footer')
       <!-- footer end -->
    </div>
  </main>
  <!-- 左边导航 -->
  <div class="dual dual-left d-none d-md-block">
    <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(0)">
      <span>原生APP</span>
      <div class="dual dual-left-img">
        <i class="iconfont">&#xe6b1;</i>
      </div>
    </a>
    <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(1)">
      <span>WEB APP</span>
      <div class="dual dual-left-img">
        <i class="iconfont">&#xe610;</i>
      </div>
    </a>
    <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(2)">
      <span>解决方案</span>
      <div class="dual dual-left-img">
        <i class="iconfont">&#xe768;</i>
      </div>
    </a>
    <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(3)">
      <span>项目流程</span>
      <div class="dual dual-left-img">
        <i class="iconfont">&#xe62e;</i>
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