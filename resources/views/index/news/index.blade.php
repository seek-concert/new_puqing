{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="{{asset('index/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/news.css')}}">
@endsection

{{-- Content --}}
@section('content')
{{-- 主体 --}}
<main class="main-body container">
    {{-- 企业动态 --}}
    <section class="row">
      <div class="main-subtitle">
        <a href="https://www.p7ing.com" class="active" title="普擎官网">首页</a>
        <a href="#" title="网站建设行业新闻">企业动态</a>
      </div>
    </section>
    <section class="row">
      <div class="news-title">
        <span class="news-title-num">01</span>
        <span class="news-title-line"></span>
        <span class="news-title-name">企业动态</span>
      </div>
      <div class="news-content">
        <div class="row pb-md-5 pd-3">
          <div class="col-md-6 col-12 border-md-right">
            <div class="swiper-container swiper-entreprice" id="swiperEntreprice">
              {{-- 大图 --}}
              <div class="swiper-wrapper">
                @if(!empty($company_news))
                  @foreach($company_news as $k=>$v)
                    @if($k==0)
                      <div class="swiper-slide">
                        <div class="swiper-entreprice-img">
                          <img src="{{$v->thumbnail?:'index/images/news/slide1.png'}}" alt="普擎新闻大图">
                        </div>
                        <div class="swiper-entreprice-title">{{$v->title}}</div>
                      </div>
                    @endif
                  @endforeach
                @endif
              </div>
            </div>
          </div>
          {{-- 大图右侧 --}}
          <div class="col-md-6 col-12 news-items">
            @if(!empty($company_news))
              @foreach($company_news as $k=>$v)
                @if(in_array($k,[1,2,3]))
                  <div class="news-item">
                    <a href="{{url('news_info',['id'=>$v->id])}}">
                      <img src="{{$v->thumbnail?:'index/images/news/img3.png'}}" alt="" class="news-item-pic">
                      <div class="news-item-content">
                        <h5 class="news-item-title">{{$v->title}}</h5>
                        <P class="news-item-info">{{$v->description}}</P>
                      </div>
                    </a>
                  </div>
                @endif
              @endforeach
            @endif
          </div>
        </div>
        <div class="row">
          <div class="swiper-container" id="swiperNewsList">
            {{-- 大图下方列表内容 --}}
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="news-items swiper-news-items" style="width: 100%">
                  @if(!empty($industry_news))
                    @foreach($industry_news as $k=>$v)
                      @if(in_array($k,[0,1,2]))
                        <div class="news-item">
                          <a href="{{url('/news_info',['id'=>$v->id])}}">
                            <img src="{{$v->thumbnail?:'index/images/news/img3.png'}}" alt="{{$v->keywords?:'重庆网站建设外包服务img'}}" class="news-item-pic">
                            <div class="news-item-content">
                              <h5 class="news-item-title">{{$v->title}}</h5>
                              <P class="news-item-info">{{$v->description}}</P>
                              <div class="news-item-times">
                                <span class="iconfont">&#xe6e0;</span>
                                <span>{{date('Y-m-d',$v->input_time)}}</span>
                                <span class="iconfont text-success">&#xec1e;</span>
                                <span>网络</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      @endif
                    @endforeach
                  @endif
                </div>
              </div>
              <div class="swiper-slide">
                <div class="news-items swiper-news-items">
                  @if(!empty($industry_news))
                    @foreach($industry_news as $k=>$v)
                      @if(in_array($k,[3,4,5]))
                        <div class="news-item">
                          <a href="{{url('/news_info',['id'=>$v->id])}}">
                            <img src="{{$v->thumbnail?:'index/images/news/img3.png'}}" alt="{{$v->keywords?:'重庆网站建设外包服务img'}}" class="news-item-pic">
                            <div class="news-item-content">
                              <h5 class="news-item-title">{{$v->title}}</h5>
                              <P class="news-item-info">{{$v->description}}</P>
                              <div class="news-item-times">
                                <span class="iconfont">&#xe6e0;</span>
                                <span>{{date('Y-m-d',$v->input_time)}}</span>
                                <span class="iconfont text-success">&#xec1e;</span>
                                <span>网络</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      @endif
                    @endforeach
                  @endif
                </div>
              </div>
              <div class="swiper-slide">
                <div class="news-items swiper-news-items">
                  @if(!empty($industry_news))
                    @foreach($industry_news as $k=>$v)
                      @if(in_array($k,[6,7,8]))
                        <div class="news-item">
                          <a href="{{url('/news_info',['id'=>$v->id])}}">
                            <img src="{{$v->thumbnail?:'index/images/news/img3.png'}}" alt="{{$v->keywords?:'重庆网站建设外包服务img'}}" class="news-item-pic">
                            <div class="news-item-content">
                              <h5 class="news-item-title">{{$v->title}}</h5>
                              <P class="news-item-info">{{$v->description}}</P>
                              <div class="news-item-times">
                                <span class="iconfont">&#xe6e0;</span>
                                <span>{{date('Y-m-d',$v->input_time)}}</span>
                                <span class="iconfont text-success">&#xec1e;</span>
                                <span>网络</span>
                              </div>
                            </div>
                          </a>
                        </div>
                      @endif
                    @endforeach
                  @endif
                </div>
              </div>
            </div>
            {{-- 如果需要导航按钮 --}}
            <div class="swiper-button-prev swiper-newslist-button-prev d-none d-sm-block"></div>
            <div class="swiper-button-next swiper-newslist-button-next d-none d-sm-block"></div>
          </div>
        </div>
      </div>
    </section>
    {{-- 行业新闻 --}}
    <section class="row">
      <div class="news-title">
        <span class="news-title-num">02</span>
        <span class="news-title-line"></span>
        <span class="news-title-name">行业新闻</span>
      </div>
      <div class="news-content">
        <div class="row">
          <div class="col-md-9 col-12 news-items news-industry-items border-md-right">
            @if(!empty($industry_news))
              @foreach($industry_news as $k=>$v)
                @if(in_array($k,[9,10,11,12,13,14]))
                  <div class="news-item">
                    <a href="{{url('/news_info',['id'=>$v->id])}}">
                      <img src="{{$v->thumbnail?:'index/images/news/img5.png'}}" alt="{{$v->keywords?:'重庆网站建设外包服务img'}}" class="news-item-pic">
                      <div class="news-item-content">
                        <h5 class="news-item-title">{{$v->title}}</h5>
                        <div class="news-item-times">
                          <span>{{date('Y-m-d',$v->input_time)}}</span>
                          <span class="iconfont text-success">&#xec1e;</span>
                          <span>网络</span>
                        </div>
                        <P class="news-item-info">{{$v->description}}</P>
                        <span class="news-item-more"><em class="iconfont">&#xe636;</em> 更多</span>
                      </div>
                    </a>
                   </div>
                @endif
              @endforeach
            @endif
            {{-- 分页 --}}
            <nav aria-label="navigation">
              {{--<ul class="pagination justify-content-center pt-md-5 pt-3">--}}
              {{ $industry_news->links() }}
              {{--</ul>--}}
            </nav>
          </div>
          <div class="col-md-3 d-none d-md-block news-aside">
            <div class="news-aside-tags">
              <h4 class="news-aside-title">标签</h4>
              <div class="news-aside-tags__list">
                <a href="{{url('/web')}}"><strong>重庆网站建设</strong></a>
                <a href="{{url('/web')}}"><strong>网站开发</strong></a>
                <a href="{{url('/web')}}"><strong>重庆网站外包</strong></a>
                <a href="{{url('/web')}}"><strong>网站制作</strong></a>
                <a href="{{url('/wechat')}}"><strong>微信小程序开发</strong></a>
                <a href="{{url('/news')}}"><strong>网站安全</strong></a>
                <a href="{{url('/web')}}"><strong>网站维护</strong></a>
                <a href="{{url('/wechat')}}"><strong>微信公众号开发</strong></a>
                <a href="{{url('/app')}}"><strong>软件定制</strong></a>
                <a href="{{url('/web')}}"><strong>网站设计</strong></a>
              </div>
            </div>
            <div class="news-aside-list">
              <h4 class="news-aside-title">热推新闻</h4>
              <ul class="news-aside-list__link">
                @if(!empty($industry_news))
                  @foreach($industry_news as $k=>$v)
                    @if(in_array($k,[3,4,5,6,7,8]))
                    <li><a href="{{url('/news_info',['id'=>$v->id])}}" title="{{$v->title}}">
                        <h5>{{$v->title}}</h5>
                        <p>{{date('Y-m-d',$v->input_time)}}</p>
                      </a></li>
                    @endif
                  @endforeach
                @endif
              </ul>
            </div>
            <div class="news-aside-call">
              <h4 class="news-aside-title">咨询</h4>
              <p>电话：15330360382</p>
              <p>QQ：1105420247</p>
              <p>邮箱：leimon@p7ing.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- 最新案例 --}}
    <section class="row">
      <div class="news-title">
        <span class="news-title-name">最新案例</span>
      </div>
      <div class="news-content">
        <div class="row">
          @if(!empty($case_lists))
            @foreach($case_lists as $k=>$v)
              <div class="col-md-3 col-sm-6 col-12">
                <a href="{{url('case_info',[$v->id])}}" class="card news-case">
                  <img class="card-img-top case-list-img" src="{{$v->thumbnail?:'index/images/news/img12.png'}}" alt="{{$v->keywords}}">
                  <div class="card-body">
                    <h5 class="card-title text-center">{{$v->title}}</h5>
                  </div>
                </a>
              </div>
            @endforeach
          @endif
        </div>
      </div>
    </section>
  </main>
{{-- footer --}}
  @include('index.public.footer')
{{-- footer end --}}
@endsection

{{-- js --}}
@section('js')
    <script src="{{asset('index/js/lib/swiper.min.js')}}"></script>
    <script src="{{asset('index/js/news.js')}}"></script>
    <script>
      $('.pagination').addClass('justify-content-center pt-md-5 pt-3');
      $('.pagination li').addClass('page-item');
      $('.pagination li span').addClass('page-link');
      $('.pagination li a').addClass('page-link');
    </script>
@endsection
