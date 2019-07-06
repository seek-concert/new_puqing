{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="index/css/wechat-dev-small.css">
@endsection

{{-- Content --}}
@section('content')
    <!-- banner -->
    <section class="small-banner d-flex flex-column justify-content-center align-items-center text-center">
        <h1 class="mb-5 px-4 py-2 border">微信小程序开发</h1>
        <h5>专业微信小程序开发团队，为您提供小程序定制开发服务</h5>
    </section>

    <section class="main-wrap">
        <div class="container-fluid">
            <div class="main-subtitle row pt-3">
                <a href="https://www.p7ing.com" title="普擎官网">首页</a>
                <a href="{{url('/wechat')}}" title="微信开发">微信开发</a>
                <a href="#" class="active" title="微信小程序开发详情">微信小程序开发</a>
            </div>
        </div>
    </section>
    <!-- 微信小程序开发 -->
    <section class="main-wrap small-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">微信小程序开发</h2>
                    <p class="text-96">
                        <strong>微信小程序开发</strong>是在微信提供的API开发接口上，进行功能需求的开发，但是微信小程序自带的功能有限，无法满足企业的各种个性化需求，所以需要对微信小程序进行定制开发。杭州迅牛是一家专业的<strong>微信小程序定制开发公司</strong>，拥有150+的开发设计团队，根据企业需求来规划小程序开发方案，帮助企业快速步入小程序红利时代。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- 企业为什么需要开发小程序 -->
    <section class="small-wrap bg-main">
        <div class="small-wrap-count">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">企业为什么需要开发小程序</h2>
                    </div>
                    <div class="w-100"></div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/small/liuliang.png')}}" alt="为企业获得更多流量">
                            <h6>为企业获得更多流量</h6>
                        </div>
                    </div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/small/yhty.png')}}" alt="优秀的用户体验">
                            <h6>优秀的用户体验</h6>
                        </div>
                    </div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/small/qypp.png')}}" alt="突出企业品牌">
                            <h6>突出企业品牌</h6>
                        </div>
                    </div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/small/kfcb.png')}}" alt="降低企业开发成本">
                            <h6>降低企业开发成本</h6>
                        </div>
                    </div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/small/sytx.png')}}" alt="搭建新的商业体系">
                            <h6>搭建新的商业体系</h6>
                        </div>
                    </div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/small/jszy.png')}}" alt="节省企业资源">
                            <h6>节省企业资源</h6>
                        </div>
                    </div>
                    <div class="small-wrap-count__col">
                        <div class="small-wrap-count__item">
                            <img src="{{asset('index/images/wechatdev/small/yycj.png')}}" alt="应用场景丰富">
                            <h6>应用场景丰富</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 小程序八大营销功能 -->
    <section class="small-wrap bg-f6">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">小程序八大营销功能</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-card">
                        <img src="{{asset('index/images/wechatdev/small/xiaochenxu.png')}}" alt="附近小程序">
                        <h5>附近小程序</h5>
                        <p>可以帮助商户快速、低门槛地在指定地点展示小程序，以方便被周围的用户找到并使用，增加商家曝光度。</p>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-card">
                        <img src="{{asset('index/images/wechatdev/small/saoma.png')}}" alt="线下扫码">
                        <h5>线下扫码</h5>
                        <p>小程序不需要安装，用户通过微信扫一扫线下二维码即可进入小程序。</p>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-card">
                        <img src="{{asset('index/images/wechatdev/small/gongzhonghao.png')}}" alt="公众号关联">
                        <h5>公众号关联</h5>
                        <p>同一主体的微信公众号可以和小程序相互关联，并在公众号图文消息、自定义菜单、模板消息等场景中使用已关联的小程序。</p>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-card">
                        <img src="{{asset('index/images/wechatdev/small/share.png')}}" alt="好友分享">
                        <h5>好友分享</h5>
                        <p>可以分享小程序的任何一个页面给微信好友或微信群，让小程序获得更多流量入口。</p>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-card">
                        <img src="{{asset('index/images/wechatdev/small/shejiao.png')}}" alt="多种社交功能">
                        <h5>多种社交功能</h5>
                        <p>交友、社交/论坛、直播、问答等功能，丰富商家和用户之间沟通渠道。</p>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-card">
                        <img src="{{asset('index/images/wechatdev/small/info.png')}}" alt="消息通知">
                        <h5>消息通知</h5>
                        <p>商户可将模板消息发送给与小程序互动过的用户，用户可通过消息进入小程序进行再次交流，互动性大大提高。</p>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-card">
                        <img src="{{asset('index/images/wechatdev/small/zujian.png')}}" alt="丰富的组件和API">
                        <h5>丰富的组件和API</h5>
                        <p>导航、多媒体、位置、视频等原生APP一样的功能支持，实现商家各种需求。</p>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-card">
                        <img src="{{asset('index/images/wechatdev/small/xitong.png')}}" alt="完善的用户系统">
                        <h5>完善的用户系统</h5>
                        <p>小程序可直接采用微信账号，极大降低用户首次使用门槛。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 行业小程序开发解决方案 -->
    <section class="small-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">行业小程序开发解决方案</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-salution">
                        <div class="small-wrap-salution__img small-wrap-salution__img1"></div>
                        <h5>餐饮行业解决方案</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-salution">
                        <div class="small-wrap-salution__img small-wrap-salution__img2"></div>
                        <h5>电商行业解决方案</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-salution">
                        <div class="small-wrap-salution__img small-wrap-salution__img3"></div>
                        <h5>酒店/KTV行业解决方案</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-salution">
                        <div class="small-wrap-salution__img small-wrap-salution__img4"></div>
                        <h5>O2O行业解决方案</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-salution">
                        <div class="small-wrap-salution__img small-wrap-salution__img5"></div>
                        <h5>教育行业解决方案</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-salution">
                        <div class="small-wrap-salution__img small-wrap-salution__img6"></div>
                        <h5>旅游行业解决方案</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-salution">
                        <div class="small-wrap-salution__img small-wrap-salution__img7"></div>
                        <h5>房地产行业解决方案</h5>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <div class="small-wrap-salution">
                        <div class="small-wrap-salution__img small-wrap-salution__img8"></div>
                        <h5>医疗行业解决方案</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 小程序定制开发流程 -->
    <section class="small-wrap bg-main">
        <div class="main-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">小程序定制开发流程</h2>
                    </div>
                    <div class="col-12">
                        <div class="small-wrap-flow">
                            <div class="row">
                                <div class="col-12">
                                    <div class="small-wrap-flow__step small-wrap-flow__step1">
                                        <h6>产品咨询</h6>
                                        <p>结合您的项目需求和微信小程序自身的性质，我们的产品经理会帮您策划合理可行的方案。</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="small-wrap-flow__step small-wrap-flow__step2">
                                        <h6>需求梳理</h6>
                                        <p>我们会把需求梳理成完善的功能文档，包含前端和后台详细功能描述，让项目执行更高效透明。</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="small-wrap-flow__step small-wrap-flow__step3">
                                        <h6>设计开发</h6>
                                        <p>熟悉微信小程序开发和设计规范的设计师和工程师进行项目开发，定期会向您发送项目进度报告。</p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="small-wrap-flow__step small-wrap-flow__step4">
                                        <h6>测试上线</h6>
                                        <p>我们联合第三方测试机构，对小程序在不同手机和微信版本做全面测试。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 offset-1 col-md-2 offset-md-5 my-5 ">
                        <button type="button" class="btn btn-primary btn-block btn-lg badge-pill">立即咨询</button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 小程序开发常见问题 -->
    <section class="small-wrap">
        <div class="main-wrap">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-center">小程序开发常见问题</h2>
                    </div>
                    <div class="col-12">
                        <div class="small-wrap-qa">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="small-wrap-qa__item">
                                        <h5><span class="small-wrap-qa__q">Q</span> 企业为什么需要开发小程序？</h5>
                                        <p><span class="small-wrap-qa__a">A</span>
                                            微信拥有近10亿的活跃用户，企业开发小程序能享受到平台带来的营销助力，而且小程序开发成本低，很快就能投入运营。
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="small-wrap-qa__item">
                                        <h5><span class="small-wrap-qa__q">Q</span> 微信小程序可以取代APP吗？</h5>
                                        <p><span class="small-wrap-qa__a">A</span>
                                            微信小程序还不能完全取代APP，小程序不适合开发功能复杂、日活量较大的应用。</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="small-wrap-qa__item">
                                        <h5><span class="small-wrap-qa__q">Q</span> 小程序和公众号有什么区别？</h5>
                                        <p><span class="small-wrap-qa__a">A</span>
                                            小程序更接近APP，适合低频应用。公众号基于H5开发，功能围绕信息展示与营销。</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="small-wrap-qa__item">
                                        <h5><span class="small-wrap-qa__q">Q</span> 小程序定制开发和小程序模板有什么区别？</h5>
                                        <p><span class="small-wrap-qa__a">A</span>
                                            小程序模板适合一般性需求，不提供源码；小程序定制开发满足复杂的个性化需求，交付源码，客户可以自己维护和升级。
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="small-wrap-qa__item">
                                        <h5><span class="small-wrap-qa__q">Q</span> 小程序定制开发要多少钱？</h5>
                                        <p><span class="small-wrap-qa__a">A</span>
                                            小程序的功能越复杂，质量越高，报价越高，价格几万到十几万都有，一般开发价格是APP开发的三分之一。</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="small-wrap-qa__item">
                                        <h5><span class="small-wrap-qa__q">Q</span> 微信小程序开发公司哪家比较好？</h5>
                                        <p><span class="small-wrap-qa__a">A</span>
                                            从公司的规模、开发团队实力、开发案例、售后等方面来评估，杭州迅牛是华东地区领先的小程序开发公司。</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="small-wrap-qa__item">
                                        <h5><span class="small-wrap-qa__q">Q</span> 小程序开发是找个人开发好还是公司好？</h5>
                                        <p><span class="small-wrap-qa__a">A</span> 功能简单可以找个人开发；找小程序开发公司的话质量、售后都有保证。</p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="small-wrap-qa__item">
                                        <h5><span class="small-wrap-qa__q">Q</span> 小程序开发是直接使用模板好还是定制开发好？</h5>
                                        <p><span class="small-wrap-qa__a">A</span>
                                            没有好坏对错之分，根据自身需求及预算选择合适的开发模式。小程序模板更适合个人，小程序定制开发更适合公司。</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
