{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="/index/css/wechat-dev-small.css">
@endsection

{{-- Content --}}
@section('content')
    <!-- banner -->
    <section class="nopublic-banner d-flex flex-column  align-items-center text-center">
        <div class="text-ft-h1 px-4 py-2 border">微信公众平台开发</div>
    </section>

    <section class="main-wrap">
        <div class="container-fluid">
            <div class="main-subtitle row pt-3">
                <a href="https://www.p7ing.com" title="普擎官网">首页</a>
                <a href="{{url('/wechat')}}" title="微信开发">微信开发</a>
                <a href="#" class="active" title="微信公众平台开发详情">微信公众平台开发</a>
            </div>
        </div>
    </section>
    <!-- 微信二次开发 -->
    <section class="main-wrap small-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">微信二次开发</h2>
                    <p class="text-96">
                        微信二次开发也叫做微信公众平台开发，微信营销作为当下热门的线上营销方式被越来越多的企业所看重，但是微信平台自带的功能有很多局限性，无法满足企业的功能服务需求，所以就需要对微信公众平台进行二次开发。讯牛为客户提供专业的微信公众平台开发，在金融、医疗、酒店、教育、快递等行业有成熟的微信开发解决方案，是一站式微信开发外包公司。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 企业为什么要做微信公众号开发 -->
    <section class="small-wrap bg-f6">
        <div class="small-wrap-count">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">企业为什么要做微信公众号开发</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/nopublic/we_img1.png')}}" alt="移动互联网趋势">
                            <h6>移动互联网趋势</h6>
                        </div>
                    </div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/nopublic/we_img2.png')}}" alt="巨大流量入口">
                            <h6>巨大流量入口</h6>
                        </div>
                    </div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/nopublic/we_img3.png')}}" alt="强大的用户粘性和使用惯性">
                            <h6>强大的用户粘性和使用惯性</h6>
                        </div>
                    </div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/nopublic/we_img4.png')}}" alt="差异化服务">
                            <h6>差异化服务</h6>
                        </div>
                    </div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/nopublic/we_img5.png')}}" alt="时尚的产品销售渠道">
                            <h6>时尚的产品销售渠道</h6>
                        </div>
                    </div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/nopublic/we_img6.png')}}" alt="高效CRM管理">
                            <h6>高效CRM管理</h6>
                        </div>
                    </div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/nopublic/we_img7.png')}}" alt="低成本营销">
                            <h6>低成本营销</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 微信公众平台四大开发服务 -->
    <section class="small-wrap main-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">微信公众平台四大开发服务</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-12 col-md-6">
                    <div class="small-wrap-service">
                        <div class="small-wrap-service__img">
                            <img src="{{asset('index/images/wechatdev/nopublic/sp_img1.png')}}" alt="微信服务号开发">
                        </div>
                        <div class="small-wrap-service__cont">
                            <h5>微信服务号开发</h5>
                            <p>微信服务号开发，定制个性化功能，可以和企业网站、手机站、APP等连接，实现数据同步，提升企业的业务能力和用户管理能力，让营销变得更容易</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="small-wrap-service">
                        <div class="small-wrap-service__img">
                            <img src="{{asset('index/images/wechatdev/nopublic/sp_img2.png')}}" alt="微信订阅号开发">
                        </div>
                        <div class="small-wrap-service__cont">
                            <h5>微信订阅号开发</h5>
                            <p>微信订阅号开发能够帮助企业实现产品宣传，提供图文、视频、音频传播方式，更好的与用户互动。</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="small-wrap-service">
                        <div class="small-wrap-service__img">
                            <img src="{{asset('index/images/wechatdev/nopublic/sp_img3.png')}}" alt="微信企业号开发">
                        </div>
                        <div class="small-wrap-service__cont">
                            <h5>微信企业号开发</h5>
                            <p>微信企业号开发以企业需求为前提，帮助企业建立员工、上下游供应链与企业IT系统间的连接，实现生产、管理、协作、运营的移动化。</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="small-wrap-service">
                        <div class="small-wrap-service__img">
                            <img src="{{asset('index/images/wechatdev/nopublic/sp_img1.png')}}" alt="微信小程序开发">
                        </div>
                        <div class="small-wrap-service__cont">
                            <h5>微信小程序开发</h5>
                            <p>微信小程序是现在的风口，未来的趋势，所以为什么不去开发自己的小程序呢？迅牛为企业提供小程序定制开发服务，帮企业抢占先机。</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 微信公众平台5大特色功能开发 -->
    <section class="small-wrap main-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">微信公众平台5大特色功能开发</h2>
                </div>
                <div class="small-wrap-feature">
                    <div class="small-wrap-feature__box small-wrap-feature__box1">
                        <img src="{{asset('index/images/wechatdev/nopublic/fea_img1.png')}}" alt="微信H5页面制作">
                        <h5>微信H5页面制作</h5>
                    </div>
                    <div class="small-wrap-feature__box small-wrap-feature__box2">
                        <img src="{{asset('index/images/wechatdev/nopublic/fea_img2.png')}}" alt="微官网开发">
                        <h5>微官网开发</h5>
                    </div>
                    <div class="small-wrap-feature__box small-wrap-feature__box3">
                        <img src="{{asset('index/images/wechatdev/nopublic/fea_img3.png')}}" alt="微信支付功能开发">
                        <h5>微信支付功能开发</h5>
                    </div>
                    <div class="small-wrap-feature__box small-wrap-feature__box4">
                        <img src="{{asset('index/images/wechatdev/nopublic/fea_img4.png')}}" alt="微信预约功能开发">
                        <h5>微信预约功能开发</h5>
                    </div>
                    <div class="small-wrap-feature__box small-wrap-feature__box5">
                        <img src="{{asset('index/images/wechatdev/nopublic/fea_img5.png')}}" alt="微分销系统开发">
                        <h5>微分销系统开发</h5>
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
