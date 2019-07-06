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
            <a href="{{url('/web_site_company_web')}}" class="commom-navs-content__item active">
                <div class="commom-navs-content__icon iconfont">&#xe69f;</div>
                <p class="commom-navs-content__title">企业官网建设</p>
            </a>
            <a href="{{url('/web_site_company_view')}}" class="commom-navs-content__item">
                <div class="commom-navs-content__icon iconfont">&#xe663;</div>
                <p class="commom-navs-content__title">视觉形象展示网站</p>
            </a>
            <a href="{{url('/web_site_company_sale')}}" class="commom-navs-content__item">
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
                <a href="#" class="active" title="企业官网建设详情">企业官网建设</a>
            </div>
        </div>
    </section>
    <!-- 企业官网建设 -->
    <section class="container company-wrap">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="company-wrap-bg1"></div>
            </div>
            <div class="col-12 col-md-6">
                <div class="company-wrap-content">
                    <h1>企业官网建设</h1>
                    <p>
                        我们和客户探讨,针对客户需求,为客户设计优秀企业官网视觉效果,针对客户特殊性，进行定制型开发，完整确保客户的需求完美体现,开发过程全程与客户实时沟通进程与开发实际效果，做到随时看,随时改，让每一位客户都能将官网作为可以在互联网海洋翱翔的平台实现将公司宣称最大化，公司收益最大化
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- 我们的优势 -->
    <section class="company-wrap company-wrap1">
        <div class="company-wrap-super container">
            <h1>我们的优势</h1>
            <h3 class="text-qblue">SUPERIORITY</h3>
            <div class="row">
                <div class="col-12">
                    <div class="company-wrap-super__item">
                        <div class="iconfont">&#xe616;</div>
                        <div class="company-wrap-super__text">
                            <h5>经验丰富的设计团队</h5>
                            <p>专业的网页设计为您提供整站视觉设计；</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="company-wrap-super__item">
                        <div class="iconfont">&#xe686;</div>
                        <div class="company-wrap-super__text">
                            <h5>量身定制的服务</h5>
                            <p>经验丰富的网站开发人员为您提供完美的定制服务；</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="company-wrap-super__item">
                        <div class="iconfont">&#xe640;</div>
                        <div class="company-wrap-super__text">
                            <h5>个性化的服务</h5>
                            <p>专业设计人员为您提供个性化风格，满足您的个性化的需求；</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="company-wrap-super__item">
                        <div class="iconfont">&#xe648;</div>
                        <div class="company-wrap-super__text">
                            <h5>值得信赖的服务</h5>
                            <p>团队均为3年以上设计/开发经验成员,称为您最坚实的后盾；</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 我们的能力 -->
    <section class="container company-wrap text-center">
        <div class="row justify-content-center">
            <div class="col-md-10 col-12">
                <h1 class="mb-md-4">我们的能力</h1>
                <p class="text-muted">
                    普擎科技帮助客户策划,整理,设计,开发整套网站,涵盖UI设计,公司官网,单用户电子商城,多用户电子商城,小程序商城,服务器主机托管,网站托管,网站二次开发,网站定制,以长达3年的设计,开发经验,为您提供最优质的的服务
                </p>
            </div>
            <div class="w-100"></div>
            <div class="col">
                <div class="company-wrap-power">
                    <div class="iconfont">&#xe61b;</div>
                    <h6>PROFESSIONALS</h6>
                    <p class="text-muted">专业</p>
                </div>
            </div>
            <div class="col">
                <div class="company-wrap-power">
                    <div class="iconfont">&#xe616;</div>
                    <h6>EXPERIENCE</h6>
                    <p class="text-muted">经验</p>
                </div>
            </div>
            <div class="col">
                <div class="company-wrap-power">
                    <div class="iconfont">&#xe65d;</div>
                    <h6>CREATIVE</h6>
                    <p class="text-muted">创意</p>
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
