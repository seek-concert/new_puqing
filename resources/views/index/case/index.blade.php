{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
  <link rel="stylesheet" href="index/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="index/css/bootstrap.min.css">
  <link rel="stylesheet" href="index/css/case.css">
@endsection

{{-- Content --}}
@section('content')
  <section class="case-banner">
    <div class="case-banner-content">
      <a href="{{url('/case')}}?type=1" class="case-banner-content__item active">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">企业网站</p>
      </a>
      <a href="{{url('/case')}}?type=2" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">营销型网站</p>
      </a>
      <a href="{{url('/case')}}?type=3" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">自适应网站</p>
      </a>
      <a href="{{url('/case')}}?type=4" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">手机网站</p>
      </a>
      <a href="{{url('/case')}}?type=5" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">微信小程序</p>
      </a>
      <a href="{{url('/case')}}?type=6" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">APP开发</p>
      </a>
      <a href="{{url('/case')}}?type=7" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">电商网站</p>
      </a>
      <a href="{{url('/case')}}?type=8" class="case-banner-content__item">
        <div class="case-banner-content__icon iconfont"></div>
        <p class="case-banner-content__title">门户网站</p>
      </a>
      <a href="{{url('/case')}}?type=9" class="case-banner-content__item">
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
        <a href="https://www.p7ing.com" title="普擎官网">首页</a>
        <a href="{{url('/case')}}" title="网站成功案例">成功案例</a>
        <a href="{{url('/case')}}" class="active" title="网站案例列表">企业网站</a>
      </div>
      <div class="case-content col-12">
        <div class="row">
          @if(!empty($case_lists))
            @foreach ($case_lists as $value)
              <div class="col-xl-3 col-lg-4 col-md-4 col-6">
                <a href="{{url('/case_info',['id'=>$value->id])}}" class="card news-case">
                  <img class="card-img-top" src="{{$value->thumbnail?:'index/images/news/img10.png'}}" alt="{{$value->keywords?:'重庆网站建设案例'}}">
                  <div class="card-body">
                    <h5 class="card-title text-center">{{$value->title}}</h5>
                  </div>
                </a>
              </div>
            @endforeach
          @endif
        </div>
        {{-- 分页 --}}
        <nav aria-label="navigation">
          {{--<ul class="pagination justify-content-center pt-md-5 pt-3">--}}
            {{ $case_lists->links() }}
          {{--</ul>--}}
        </nav>
      </div>
    </section>
    {{-- 热门新闻 --}}
    <section class="row">
      <div class="case-title">
        <span class="case-title-name">热门新闻</span>
      </div>
      <div class="row case-news">
        @if(!empty($industry_news))
          @foreach ($industry_news as $value)
            <div class="case-news-item col-lg-6 col-12"><a href="{{url('/news_info',['id'=>$value->id])}}"> {{$value->title}}</a><span>{{date('Y-m-d',$value->input_time)}}</span></div>
          @endforeach
        @endif
      </div>
    </section>
  </main>
  {{-- footer --}}
    @include('index.public.footer')
  {{-- footer end --}}
@endsection

{{-- js --}}
@section('js')
    <script src="index/js/case.js"></script>
    <script>
        $('.pagination').addClass('justify-content-center pt-md-5 pt-3');
        $('.pagination li').addClass('page-item');
        $('.pagination li span').addClass('page-link');
        $('.pagination li a').addClass('page-link');
    </script>
@endsection
