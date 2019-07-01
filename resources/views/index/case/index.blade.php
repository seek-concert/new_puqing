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
<!-- 主体 -->
<main class="main-body container">
    <!-- 企业动态 -->
    <section class="row">
      <div class="main-subtitle">
        <a href="/">首页</a>
        <a href="/case.html">成功案例</a>
        <a href="" class="active">企业网站</a>
      </div>
      <div class="case-content col-12">
        <div class="row">
          <div class="col-xl-3 col-lg-4 col-md-4 col-6">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="index/images/news/img10.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>
          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-6">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="index/images/news/img11.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-6">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="index/images/news/img12.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-6">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="index/images/news/img13.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-6">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="index/images/news/img10.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-6">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="index/images/news/img11.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-6">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="index/images/news/img12.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-6">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="index/images/news/img13.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-6">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="index/images/news/img10.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-6">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="index/images/news/img11.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-6">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="index/images/news/img12.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
          <div class="col-xl-3 col-lg-4 col-md-4 col-6">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="index/images/news/img13.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
        </div>
        <!-- 分页 -->
        <nav aria-label="navigation">
          <ul class="pagination justify-content-center pt-md-5 pt-3">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active"><span class="page-link">2</span></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </section>
    <!-- 热门新闻 -->
    <section class="row">
      <div class="case-title">
        <span class="case-title-name">热门新闻</span>
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

  <!-- footer -->
  <footer class="main-footer">
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
@endsection

{{-- js --}}
@section('js')
    <script src="{{asset('index/js/lib/jquery-1.9.0.min.js')}}"></script>
    <script src="{{asset('index/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{asset('index/js/config.js')}}"></script>
    <script src="{{asset('index/js/case.js')}}"></script>
@endsection
