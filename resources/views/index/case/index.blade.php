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
  <section class="case-banner">
    <div class="case-banner-content">
      <a href="./case.html?type=1" class="case-banner-content__item active">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">企业网站</p>
      </a>
      <a href="./case.html?type=2" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">营销型网站</p>
      </a>
      <a href="./case.html?type=3" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">自适应网站</p>
      </a>
      <a href="./case.html?type=4" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">手机网站</p>
      </a>
      <a href="./case.html?type=5" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">微信小程序</p>
      </a>
      <a href="./case.html?type=6" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">APP开发</p>
      </a>
      <a href="./case.html?type=7" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">电商网站</p>
      </a>
      <a href="./case.html?type=8" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">门户网站</p>
      </a>
      <a href="./case.html?type=9" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">管理系统</p>
      </a>
    </div>
  </section>
{{-- 主体 --}}
<main class="main-body container">
    {{-- 企业动态 --}}
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
        {{-- 分页 --}}
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
    {{-- 热门新闻 --}}
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
  {{-- footer --}}
    @include('index.public.footer')
  {{-- footer end --}}
@endsection

{{-- js --}}
@section('js')
    <script src="{{asset('index/js/case.js')}}"></script>
@endsection
