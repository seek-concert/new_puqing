{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
  <link rel="stylesheet" href="index/css/swiper.min.css">
  <link rel="stylesheet" href="index/css/case.css">
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
        <a href="#" class="active" title="网站案例详情">案例详情</a>
      </div>

      <div class="case-info-body">
        <div class="case-info-body__left">
          <div class="swiper-container swiper-container-v">
            <div class="swiper-wrapper">
              @if(!empty($case_list))
                @foreach ($case_list as $v)
                  <div class="swiper-slide">
                    <div class="card case-info-card @if(($infos->id)==($v->id)) active @endif" data-id="{{$v->id}}">
                      <img class="card-img-top" src="{{$v->thumbnail}}" alt="普擎科技专注网站建设外包服务">
                      <div class="card-img-orverlay">
                        <h5 class="card-title">{{$v->title}}</h5>
                      </div>
                    </div>
                  </div>
                @endforeach
              @endif
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
            <div class="text-ft-h1 news-info-title">{{$infos->title}}</div>
            <div class="news-info-time">
              <span>发布人: 管理员</span>
              <span> 发布时间：{{date('Y-m-d H:i',$infos->input_time)}}</span>
              <span> 浏览量：{{rand(12354,99999)}}</span>
            </div>
            <div class="news-info-desc">
              <p>{{$infos->description}}</p>
            </div>
            <div class="news-info-content">
              <p>{!! htmlspecialchars_decode($infos->content) !!}</p>
            </div>

            <blockquote class="blockquote text-right">
              <div class="blockquote-footer">
                来源：普擎科技
              </div>
            </blockquote>
            <div class="alert alert-light">声明：本站发布的内容以原创、转载、分享网络内容为主，如有侵权，请联系邮箱：
              leimon@p7ing.com，我们将会在第一时间删除。文章观点不代表本站立场，如需处理请联系我们。</div>
            <div class="news-info-footer">
              @if(!empty($previous))
                <a href="{{url('case_info',[$previous->id])}}">上一篇：{{$previous->title}}</a>
              @else
                上一篇：无
              @endif
              @if(!empty($next))
                <a href="{{url('case_info',[$next->id])}}">下一篇：{{$next->title}}</a>
              @else
                下一篇：无
              @endif
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- 热门新闻 -->
    <section class="row">
      <div class="case-title">
        <span class="case-title-name">热门新闻</span>
        <a href="{{url('/news')}}" class="float-right" title="网站建设外包行业新闻">查看更多<span class="iconfont">&#xeb9a;</span></a>
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
  <script src="index/js/lib/swiper.min.js"></script>
  <script src="index/js/lib/swiper.animate.min.js"></script>
    <script src="index/js/case-info.js"></script>
@endsection
