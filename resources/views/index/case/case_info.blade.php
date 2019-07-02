{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
  <link rel="stylesheet" href="{{asset('index/css/bootstrap-reboot.min.css')}}">
  <link rel="stylesheet" href="{{asset('index/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('index/css/case.css')}}">
@endsection

{{-- Content --}}
@section('content')
  {{-- banner --}}
  <section class="commom-banner"></section>
  {{-- 主体 --}}
  <main class="main-body container">
    <!-- 动态详情 -->
    <section class="row">
      <div class="main-subtitle">
        <a href="https://www.p7ing.com"  title="普擎官网">首页</a>
        <a href="{{url('/case')}}" title="网站成功案例">成功案例</a>
        <a href="#" class="active" title="网站案例详情">企业网站</a>
      </div>

      <div class="case-info-body">
        <div class="case-info-body__left">
          <div class="swiper-container swiper-container-v">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="card case-info-card" data-id="1">
                  <img class="card-img-top" src="./images/news/img10.png" alt="">
                  <div class="card-img-orverlay">
                    <h5 class="card-title">深圳懮意科技有限公司</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card case-info-card" data-id="2">
                  <img class="card-img" src="./images/news/img10.png" alt="">
                  <div class="card-img-orverlay">
                    <h5 class="card-title">深圳懮意科技有限公司</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card case-info-card" data-id="3">
                  <img class="card-img-top" src="./images/news/img10.png" alt="">
                  <div class="card-img-orverlay">
                    <h5 class="card-title">深圳懮意科技有限公司</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card case-info-card" data-id="4">
                  <img class="card-img-top" src="./images/news/img10.png" alt="">
                  <div class="card-img-orverlay">
                    <h5 class="card-title">深圳懮意科技有限公司</h5>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card case-info-card" data-id="4">
                  <img class="card-img-top" src="./images/news/img10.png" alt="">
                  <div class="card-img-orverlay">
                    <h5 class="card-title">深圳懮意科技有限公司</h5>
                  </div>
                </div>
              </div>
            </div>
            <!-- 如果需要滚动条 -->
            <!-- <div class="swiper-scrollbar"></div> -->
          </div>
          <div class="swiper-button-prev swiper-button-prev-v"></div>
          <div class="swiper-button-next swiper-button-next-v"></div>
        </div>

        <!-- 根据点击的ID ajax 内容加载 -->
        <div class="case-info-body__right">
          <div class="news-info-body">
            <h1 class="news-info-title">2019年网站备案和域名的新规实施办法</h1>
            <div class="news-info-time">
              <span>发布人: 管理员</span>
              <span>发布时间：2019-6-26 17:54:15</span>
              <span>浏览量： 1w+</span>
            </div>
            <div class="news-info-desc">
              <img src="./images/news-info/f5c27942-5dda-4b25-b030-1e7bbc90d54e.png" class="img-fluid"
                   alt="Responsive image">
              <p>
                简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介简介
              </p>
            </div>
            <div class="news-info-content">
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
              <p>
                近几年来，互联网的高速发展带动诸多个人进行互联网创业，凭借PC网站、手机网站、微信公众号等，其中大多数个人网站从事经营服务一直处于监管空白，既为一些个人低成本创业提供了便利条件，同时也让一些非法经营者逃避打击钻了空子。
              </p>
            </div>

            <blockquote class="blockquote text-right">
              <div class="blockquote-footer">
                作者：美橙互联 来源：网络
              </div>
            </blockquote>
            <div class="alert alert-light">声明：本站发布的内容以原创、转载、分享网络内容为主，如有侵权，请联系邮箱：
              leimon@p7ing.com，我们将会在第一时间删除。文章观点不代表本站立场，如需处理请联系我们。</div>
            <div class="news-info-footer">
              <a href="">上一篇：xxxxxxxxxxxxxx</a>
              <a href="">下一篇: xxxxxxxxxxxxxx</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- 热门新闻 -->
    <section class="row">
      <div class="case-title">
        <span class="case-title-name">热门新闻</span>
        <a href="/#" class="float-right">查看更多<span class="iconfont">&#xeb9a;</span></a>
      </div>
      <div class="row case-news">
        <div class="case-news-item col-lg-6 col-12"><a href="">
            企业建设网站有什么好处和作用企业建设网站有什么好处和作用企业建设网站有什么好处和作用企业建设网站有什么好处和作用企业建设网站有什么好处和作用企业建设网站有什么好处和作用</a><span>2019-06-03</span>
        </div>
        <div class="case-news-item col-lg-6 col-12"><a href=""> 企业建设网站有什么好处和作用</a><span>2019-06-03</span></div>
        <div class="case-news-item col-lg-6 col-12"><a href=""> 企业建设网站有什么好处和作用</a><span>2019-06-03</span></div>
        <div class="case-news-item col-lg-6 col-12"><a href=""> 企业建设网站有什么好处和作用</a><span>2019-06-03</span></div>
        <div class="case-news-item col-lg-6 col-12"><a href=""> 企业建设网站有什么好处和作用</a><span>2019-06-03</span></div>
        <div class="case-news-item col-lg-6 col-12"><a href=""> 企业建设网站有什么好处和作用</a><span>2019-06-03</span></div>
        <div class="case-news-item col-lg-6 col-12"><a href=""> 企业建设网站有什么好处和作用</a><span>2019-06-03</span></div>
        <div class="case-news-item col-lg-6 col-12"><a href=""> 企业建设网站有什么好处和作用</a><span>2019-06-03</span></div>
        <div class="case-news-item col-lg-6 col-12"><a href=""> 企业建设网站有什么好处和作用</a><span>2019-06-03</span></div>
        <div class="case-news-item col-lg-6 col-12"><a href=""> 企业建设网站有什么好处和作用</a><span>2019-06-03</span></div>
        <div class="case-news-item col-lg-6 col-12"><a href=""> 企业建设网站有什么好处和作用</a><span>2019-06-03</span></div>
      </div>
    </section>
  </main>
  {{-- footer --}}
    @include('index.public.footer')
  {{-- footer end --}}
@endsection

{{-- js --}}
@section('js')
    <script src="{{asset('index/js/swiper.min.js')}}"></script>
    <script src="{{asset('index/js/case-info.js')}}"></script>
@endsection
