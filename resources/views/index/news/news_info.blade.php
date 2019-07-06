{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="{{asset('index/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/news-info.css')}}">
@endsection

{{-- Content --}}
@section('content')
    {{-- banner --}}
    <section class="commom-banner"></section>
    {{-- 主体 --}}
    <main class="main-body container news-info padding-top2">
        <section class="row">
            <div class="main-subtitle">
                <a href="https://www.p7ing.com" title="普擎官网">首页</a>
                <a href="{{url('/news')}}" title="网站新闻资讯">新闻资讯</a>
                <a href="#" class="active" title="网站新闻详情">新闻详情</a>
            </div>
            <div class="col-12">
                <div class="row">
                    <article class="col-md-9 col-12 border-md-right">
                        <div class="news-info-body">
                            <h1 class="news-info-title">{{$infos->title}}</h1>
                            <div class="news-info-time">
                                <span> 发布时间：{{date('Y-m-d',$infos->input_time)}}</span>&nbsp;&nbsp;&nbsp;
                                <span> 作者：
                                    @if(!empty($infos->author))
                                        {{$infos->author}}
                                    @else
                                        未知
                                    @endif
                                </span>&nbsp;&nbsp;&nbsp;
                                <span> 来源：
                                    @if(!empty($infos->author))
                                        {{$infos->source}}
                                    @else
                                        网络
                                    @endif
                                </span>
                            </div>
                            <div class="news-info-desc">
                                <p>
                                    {{$infos->description}}
                                </p>
                            </div>
                            <div class="news-info-content">
                                <p>{!! htmlspecialchars_decode($infos->content) !!} </p>
                            </div>

                            <blockquote class="blockquote text-right">
                                <div class="blockquote-footer">

                                </div>
                            </blockquote>
                            <div class="alert alert-light">声明：本站发布的内容以原创、转载、分享网络内容为主，如有侵权，请联系邮箱：
                                leimon@p7ing.com，我们将会在第一时间删除。文章观点不代表本站立场，如需处理请联系我们。
                            </div>
                            <div class="news-info-footer">
                                @if(!empty($previous))
                                    <a href="{{url('news_info',[$previous->id])}}">上一篇：{{$previous->title}}</a>
                                @else
                                    上一篇：无
                                @endif
                                @if(!empty($next))
                                    <a href="{{url('news_info',[$next->id])}}">下一篇：{{$next->title}}</a>
                                @else
                                    下一篇：无
                                @endif
                            </div>
                        </div>
                    </article>
                    <div class="col-md-3 d-none d-md-block news-aside pt-0">
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
                                        <li><a href="{{url('/news_info',['id'=>$v->id])}}" title="{{$v->title}}">
                                                <h5>{{$v->title}}</h5>
                                                <p>{{date('Y-m-d',$v->input_time)}}</p>
                                            </a></li>
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
        <!-- 最新案例 -->
        <section class="row">
            <div class="news-title">
                <span class="news-title-name">最新案例</span>
                <a href="{{url('/case')}}" class="float-right news-title-case-more" title="网站建设外包行业案例">查看更多<span
                            class="iconfont">&#xeb9a;</span></a>
            </div>
            <div class="news-content">
                <div class="row">
                    @if(!empty($case_lists))
                        @foreach($case_lists as $k=>$v)
                            <div class="col-md-3 col-sm-6 col-12">
                                <a href="{{url('case_info',[$v->id])}}" class="card news-case">
                                    <img class="card-img-top case-list-img"
                                         src="{{$v->thumbnail?:'index/images/news/img12.png'}}" alt="{{$v->keywords}}">
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
@endsection
