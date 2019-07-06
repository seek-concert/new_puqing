{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="index/css/web-site-company.css">
@endsection

{{-- Content --}}
@section('content')
    <!-- banner -->
    <section class="commom-banner"></section>

    <section class="commom-navs">
        <div class="commom-navs-content">
            <a href="{{url('/web_site_company_web')}}" class="commom-navs-content__item">
                <div class="commom-navs-content__icon iconfont">&#xe69f;</div>
                <p class="commom-navs-content__title">企业官网建设</p>
            </a>
            <a href="{{url('/web_site_company_view')}}" class="commom-navs-content__item">
                <div class="commom-navs-content__icon iconfont">&#xe663;</div>
                <p class="commom-navs-content__title">视觉形象展示网站</p>
            </a>
            <a href="{{url('/web_site_company_sale')}}" class="commom-navs-content__item active">
                <div class="commom-navs-content__icon iconfont">&#xe612;</div>
                <p class="commom-navs-content__title">营销型网站建设</p>
            </a>
            <a href="{{url('/web_site_company_all')}}" class="commom-navs-content__item">
                <div class="commom-navs-content__icon iconfont">&#xe656;</div>
                <p class="commom-navs-content__title">响应式官网</p>
            </a>
        </div>
    </section>

    <section class="main-wrap">
        <div class="container-fluid">
            <div class="main-subtitle row pt-3">
                <a href="https://www.p7ing.com" title="普擎官网">首页</a>
                <a href="{{url('/web')}}" title="网站建设">网站建设</a>
                <a href="#" class="active" title="营销型网站建设详情">营销型网站建设</a>
            </div>
        </div>
    </section>

    <!-- 企业营销型网站建设 -->
    <section class="container company-wrap">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="company-wrap-saleimg1"></div>
            </div>
            <div class="col-12 col-md-5">
                <div class="text-ft-h1">企业营销型网站建设</div>
                <p>普擎科技专家团队以多年的实操经验总结</p>
                <div class="row text-center mb-2">
                    <img src="{{asset('index/images/website/sale-img.jpg')}}" alt="网站建设外包" class="col">
                    <div class="w-100 pb-2"></div>
                    <div class="col">用户体验</div>
                    <div class="col">站内优化</div>
                    <div class="col">营销功能</div>
                    <div class="col">后台灵活</div>
                </div>
                <p>
                    网站是企业网络营销的关键工具，要求结构合理、打开速度快、交互功能强、设计大方、适合搜索引擎收录等。以营销效果为导向的网站才能更好的为企业创造更大的利益，最大化地把访客转化为顾客，帮助你留住客户，真正实现好的网络营销效果！
                </p>
            </div>
        </div>
    </section>

    <!-- 什么是SEO服务？ -->
    <section class="company-wrap company-wrap-sale1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="text-ft-h1">什么是SEO服务？</div>
                    <p class="text-danger">普擎科技专家团队以多年的实操经验总结</p>
                    <p>
                        SEO，就是搜索引擎优化；通过对您网站的内部调整，以及网站内外的持续优化，使您的潜在客户在百度等搜索引擎搜索相应关键字时，您的网站显示在搜索引擎的靠前位置，从而提高网站访问量，促进企业在线销售扩大品牌知名度和影响力，提高行业地位！
                        是一种最实用的网站推广方法。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 实现效果 -->
    <section class="container company-wrap">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="company-wrap-saleimg2"></div>
            </div>
            <div class="col-12 col-md-5">
                <div class="text-ft-h1">实现效果</div>
                <p>网站是企业的形象窗口，虚拟展厅，与企业形象匹配的良好视觉设计，彰显企业形象。</p>
                <div class="mb-2"><img src="{{asset('index/images/website/sale-img3.jpg')}}" alt="视觉网站建设"></div>
                <div class="d-flex flex-column text-secondary">
                    <div class="wrap-sale-item"><label class="iconfont text-danger">&#xe603;</label>提升推广 ROI</div>
                    <div class="wrap-sale-item"><label class="iconfont text-danger">&#xe603;</label>持续增长</div>
                    <div class="wrap-sale-item"><label class="iconfont text-danger">&#xe603;</label>加速网站传播</div>
                    <div class="wrap-sale-item"><label class="iconfont text-danger">&#xe603;</label>彰显企业形象</div>
                    <div class="wrap-sale-item"><label class="iconfont text-danger">&#xe603;</label>促成订单</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 网站优化内容 -->
    <section class="company-wrap company-wrap-sale2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="text-ft-h1">网站优化内容</div>
                    <p>全方位的优化内容，助您更胜一筹</p>
                    <div class="d-flex flex-column text-white">
                        <div class="wrap-sale-item"><label class="iconfont">&#xe603;</label>性能优化</div>
                        <div class="wrap-sale-item"><label class="iconfont">&#xe603;</label>结构优化</div>
                        <div class="wrap-sale-item"><label class="iconfont">&#xe603;</label>内容优化</div>
                        <div class="wrap-sale-item"><label class="iconfont">&#xe603;</label>关键词排名优化</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 我们的优化标准 -->
    <section class="container company-wrap text-center">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="text-ft-h1 mb-md-4">我们的优化标准</div>
                <p class="text-muted">
                    以营销效果为导向的网站才能更好的为企业创造更大的利益，最大化地把访客转化为顾客，帮助你留住客户，真正实现好的网络营销效果！
                </p>
            </div>
            <div class="w-100"></div>
            <div class="col-12 mt-md-5">
                <div class="w-100 m-auto d-none d-lg-block"><img src="{{asset('index/images/website/sale-img5.jpg')}}" alt="营销型网站建设"></div>
                <div class="wrap-step">
                    <div class="wrap-step-item">
                        <h6>1.正确使用标题</h6>
                    </div>
                    <div class="wrap-step-item">
                        <h6>2.更好地使用描述元标签</h6>
                    </div>
                    <div class="wrap-step-item">
                        <h6>3.优化 URL的结构</h6>
                    </div>
                    <div class="wrap-step-item">
                        <h6>4.正确使用关键词标签</h6>
                    </div>
                    <div class="wrap-step-item">
                        <h6>5.正确使用heading标签</h6>
                    </div>
                    <div class="wrap-step-item">
                        <h6>6.写好链接锚文本</h6>
                    </div>
                    <div class="wrap-step-item">
                        <h6>7.提供独特的内容</h6>
                    </div>
                    <div class="wrap-step-item">
                        <h6>8.有效地使用robots.txt文件</h6>
                    </div>
                    <div class="wrap-step-item">
                        <h6>9.谨慎使用rel="nofollow"</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- footer --}}
        @include('index.public.footer')
    {{-- footer end --}}
@endsection

{{-- js --}}
@section('js')

@endsection
