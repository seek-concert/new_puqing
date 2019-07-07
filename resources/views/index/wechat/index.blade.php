{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="/index/css/swiper.min.css">
    <link rel="stylesheet" href="/index/css/animate.min.css">
    <link rel="stylesheet" href="/index/css/wechat-dev.css">
@endsection

{{-- Content --}}
@section('content')
<main class="mian-body swiper-container swiper-container-v">
    <div class="swiper-wrapper">
        {{-- 公众号 --}}
      <div class="swiper-slide">
        <section class="wechat-wrap wechat-wrap-1">
          <div class="container main-view">
            <div class="row wrap-row">
              <div class="wechat-content col-md-6 col-12 order-md-1 order-12">
                <div class="text-ft-h1 wechat-content-title ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.2s">公众号</div>
                <h2 class="wechat-content-subtitle wechat-content-subtitle-1 ani" swiper-animate-effect="fadeInLeft"
                  swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">免费认证</h2>
                <p class="wechat-content-text ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.6s">营销引流、场景自由。多样推广方式、快速推广到目标群众</p>
                <a href="{{url('/wechat_dev_public')}}" class="wechat-btn-link ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.8s">查看详情</a>
              </div>
              <div class="wechat-pic wechat-pic-1 col-md-6 col-12 order-md-12 order-1 ani"
                swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
            </div>
          </div>
        </section>
      </div>
        {{--微信小程序   专属定制开发 --}}
      <div class="swiper-slide">
        <section class="wechat-wrap wechat-wrap-2">
          <div class="container main-view">
            <div class="row wrap-row">
              <div class="wechat-content col-md-7 col-12 order-md-12 order-12">
                <div class="text-ft-h1 wechat-content-title wechat-content-title-2 ani" swiper-animate-effect="fadeInRight"
                  swiper-animate-duration="0.5s" swiper-animate-delay="0.2s">微信小程序 专属定制开发</div>
                <h2 class="wechat-content-subtitle wechat-content-subtitle-2 ani" swiper-animate-effect="fadeInRight"
                  swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">移动端最热应用，快速抢占市场商机</h2>
                <p class="wechat-content-text ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.6s">小程序主要面向线下门店，以“优惠促销+会员”为核心，优化用户购买体验，助力商户共享微信流量红利，从而实现线下门店的微信营销，打造智慧门店。</p>
                <a href="{{url('/wechat_dev_small')}}" class="wechat-btn-link ani" swiper-animate-effect="fadeInRight"
                  swiper-animate-duration="0.5s" swiper-animate-delay="0.8s">查看详情</a>
              </div>
              <div class="wechat-pic wechat-pic-2 col-md-5 col-12 order-md-1 order-1 ani"
                swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
            </div>
          </div>
        </section>
      </div>
        {{-- 微商城 --}}
      <div class="swiper-slide">
        <section class="wechat-wrap wechat-wrap-3">
          <div class="container main-view">
            <div class="row wrap-row">
              <div class="wechat-content col-md-6 col-12 order-md-1 order-12">
                <div class="text-ft-h1 wechat-content-title ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.2s">微商城</div>
                <h2 class="wechat-content-subtitle wechat-content-subtitle-3 ani" swiper-animate-effect="fadeInLeft"
                  swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">功能成熟可即刻布署</h2>
                <p class="wechat-content-text ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.6s">成就独一无二，让品牌以良好的姿态出现在客户面前,并给他们良好体验。普擎定制开发服务，针对行业更深层次的需求进行高端定制和开发， 满足一切需求</p>
                <a href="{{url('/wechat_site_shop_web')}}" class="wechat-btn-link ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.8s">查看详情</a>
              </div>
              <div class="wechat-pic wechat-pic-3 col-md-6 col-12 order-md-12 order-1 ani"
                swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
            </div>
          </div>
        </section>
      </div>
        {{-- 微服务 --}}
      <div class="swiper-slide">
        <section class="wechat-wrap wechat-wrap-4">
          <div class="container main-view wechat-serve">
            <div class="text-ft-h1 wechat-title ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
              swiper-animate-delay="0.2s">微服务</div>
            <p class="wechat-info ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
              swiper-animate-delay="0.2s">解决不同行业深度需求，落地多行业“互联网+”成熟方案</p>
            <div class="wechat-serve-pic ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s"
              swiper-animate-delay="0.2s"></div>
            <a href="{{url('/wechat_dev_service')}}" class="wechat-btn-link ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
              swiper-animate-delay="0.2s">查看详情</a>
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
      <span>公众号</span>
      <div class="dual dual-left-img">
        <i class="iconfont">&#xe600;</i>
      </div>
    </a>
    <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(1)">
      <span>微信小程序</span>
      <div class="dual dual-left-img">
        <i class="iconfont">&#xe611;</i>
      </div>
    </a>
    <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(2)">
      <span>微商城</span>
      <div class="dual dual-left-img">
        <i class="iconfont">&#xe650;</i>
      </div>
    </a>
    <a href="javaScript:;" class="dual dual-left-item" onclick="goToSwiperPage(3)">
      <span>微服务</span>
      <div class="dual dual-left-img">
        <i class="iconfont">&#xe6f3;</i>
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
