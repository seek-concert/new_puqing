{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="{{asset('index/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/animate.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/wechat-dev.css')}}">
@endsection

{{-- Content --}}
@section('content')
<main class="mian-body swiper-container swiper-container-v">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <!-- 公众号 -->
        <section class="wechat-wrap wechat-wrap-1">
          <div class="container main-view">
            <div class="row wrap-row">
              <div class="wechat-content col-md-6 col-12 order-md-1 order-12">
                <h1 class="wechat-content-title ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.2s">公众号</h1>
                <h2 class="wechat-content-subtitle wechat-content-subtitle-1 ani" swiper-animate-effect="fadeInLeft"
                  swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">免费认证</h2>
                <p class="wechat-content-text ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.6s">这是一段公众号的文案这是一段公众号的文案这是一段公众号的文案这是一段公众号的文案这是一</p>
                <a href="" class="wechat-btn-link ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.8s">查看详情</a>
              </div>
              <div class="wechat-pic wechat-pic-1 col-md-6 col-12 order-md-12 order-1 ani"
                swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
            </div>
          </div>
        </section>
      </div>
      <div class="swiper-slide">
        <!--微信小程序   专属定制开发 -->
        <section class="wechat-wrap wechat-wrap-2">
          <div class="container main-view">
            <div class="row wrap-row">
              <div class="wechat-content col-md-7 col-12 order-md-12 order-12">
                <h1 class="wechat-content-title wechat-content-title-2 ani" swiper-animate-effect="fadeInRight"
                  swiper-animate-duration="0.5s" swiper-animate-delay="0.2s">微信小程序 专属定制开发</h1>
                <h2 class="wechat-content-subtitle wechat-content-subtitle-2 ani" swiper-animate-effect="fadeInRight"
                  swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">移动端最热应用，快速抢占市场商机</h2>
                <p class="wechat-content-text ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.6s">这是一段门户网站的文案介绍这是一段门户网站的文案介绍这是一段门户网站的文案介绍</p>
                <a href="" class="wechat-btn-link ani" swiper-animate-effect="fadeInRight"
                  swiper-animate-duration="0.5s" swiper-animate-delay="0.8s">查看详情</a>
              </div>
              <div class="wechat-pic wechat-pic-2 col-md-5 col-12 order-md-1 order-1 ani"
                swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
            </div>
          </div>
        </section>
      </div>
      <div class="swiper-slide">
        <!-- 微商城 -->
        <section class="wechat-wrap wechat-wrap-3">
          <div class="container main-view">
            <div class="row wrap-row">
              <div class="wechat-content col-md-6 col-12 order-md-1 order-12">
                <h1 class="wechat-content-title ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.2s">微商城</h1>
                <h2 class="wechat-content-subtitle wechat-content-subtitle-3 ani" swiper-animate-effect="fadeInLeft"
                  swiper-animate-duration="0.5s" swiper-animate-delay="0.4s">功能成熟可即刻布署</h2>
                <p class="wechat-content-text ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.6s">这是一段公众号的文案这是一段公众号的文案这是一段公众号的文案这是一段公众号的文案这是一</p>
                <a href="" class="wechat-btn-link ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
                  swiper-animate-delay="0.8s">查看详情</a>
              </div>
              <div class="wechat-pic wechat-pic-3 col-md-6 col-12 order-md-12 order-1 ani"
                swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s" swiper-animate-delay="0.2s"></div>
            </div>
          </div>
        </section>
      </div>
      <div class="swiper-slide">
        <!-- 微服务 -->
        <section class="wechat-wrap wechat-wrap-4">
          <div class="container main-view wechat-serve">
            <h1 class="wechat-title ani" swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.5s"
              swiper-animate-delay="0.2s">微服务</h1>
            <p class="wechat-info ani" swiper-animate-effect="fadeInRight" swiper-animate-duration="0.5s"
              swiper-animate-delay="0.2s">这是一段小小的文案介绍这是一段小小的文案介绍这是一段小小的</p>
            <div class="wechat-serve-pic ani" swiper-animate-effect="zoomIn" swiper-animate-duration="0.5s"
              swiper-animate-delay="0.2s"></div>
            <a href="" class="wechat-btn-link ani" swiper-animate-effect="fadeInUp" swiper-animate-duration="0.5s"
              swiper-animate-delay="0.2s">查看详情</a>
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
                                    <a href="">移动电商行业解决方案</a>
                                    <a href="">数字金融行业解决方案</a>
                                    <a href="">网络营销行业解决方案</a>
                                    <a href="">智能硬件行业解决方案</a>
                                    <a href="">医疗行业解决方案</a>
                                    <a href="">教学行业解决方案</a>
                                    <a href="">建筑装饰行业解决方案</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-12 pb-3">
                            <div class="footer-box">
                                <div class="footer-title">
                                    <h5>我们的服务</h5>
                                    <a href="#">更多+</a>
                                </div>
                                <p class="footer-text">
                                    <strong>网站建设</strong>
                                    <strong>网站外包</strong>
                                    <strong>网站设计</strong>
                                    <strong>软件定制</strong>
                                    <strong>微信服务</strong>
                                    <strong>企业官网建设</strong>
                                    <strong>商城网站建设</strong>
                                    <strong>系统平台开发</strong>
                                    <strong>门户网站</strong>
                                    <strong>手机网站</strong>
                                    <strong>快速建站</strong>
                                    <strong>PHP二次开发</strong>
                                    <strong>微信公众号</strong>
                                    <strong>微信小程序</strong>
                                    <strong>微官网</strong>
                                    <strong>微商城</strong>
                                    <strong>微服务</strong>
                                    <strong>WEBAPP</strong>
                                    <strong>软件界面设计</strong>
                                    <strong>SEO优化</strong>
                                    <strong>关键字排名</strong>
                                    <strong>快速上首页</strong>
                                    <strong>搜索引擎优化</strong>
                                    <strong>整站优化</strong>
                                    <strong>问题解答</strong>
                                    <strong>使用教学</strong>
                                    <strong>免费维护一年</strong>
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
                                    普擎网站设计，为客户量身定制各类网站建设业务，包括企业型、电子商务型、行业门户型、品牌建立型等各类网站，实战经验丰富，成功案例众多。以客户利益为出发点，普擎网站制作为客户规划、定制符合企业需求、带有营销价值的网络建站方案，提供从网站前期定位分析策划、技术架构，到网站界面设计...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="footer-link">
                        <h5>友情链接</h5>
                        <div class="link-list">
                            <a href="">重庆普擎科技</a>
                            <a href="">重庆网站设计</a>
                            <a href="">重庆网站建设</a>
                        </div>
                    </div>
                    <p class="footer-text">重庆普擎科技官网©2019 重庆市普擎科技有限公司 版权所有 | 渝ICP备19004069号</p>
                </div>
            </div>
        </footer>
    <!-- footer end -->
    </div>
  </main>
  <!-- 左边导航 -->
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
    <script src="{{asset('index/js/lib/jquery-1.9.0.min.js')}}"></script>
    <script src="{{asset('index/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{asset('index/js/lib/swiper.min.js')}}"></script>
    <script src="{{asset('index/js/lib/swiper.animate.min.js')}}"></script>
    <script src="{{asset('index/js/config.js')}}"></script>
    <script src="{{asset('index/js/commonSwiper.js')}}"></script>
@endsection
