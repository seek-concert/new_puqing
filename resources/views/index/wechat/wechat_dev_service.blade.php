{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="index/css/wechat-dev-service.css">
@endsection

{{-- Content --}}
@section('content')
    <!-- banner -->
    <section class="commom-banner"></section>

    <section class="main-wrap">
        <div class="container-fluid">
            <div class="main-subtitle row pt-3">
                <a href="https://www.p7ing.com" title="普擎官网">首页</a>
                <a href="{{url('/wechat')}}" title="微信开发">微信开发</a>
                <a href="#" class="active" title="微服务开发详情">微服务开发</a>
            </div>
        </div>
    </section>
    <!-- 微信网站 轻松打造 -->
    <section class="container service-wrap">
        <div class="row align-items-center">
            <div class="col-12 col-md-6 order-md-12 order-0">
                <div class="service-wrap-img1"></div>
            </div>
            <div class="col-12 col-md-6 order-md-0 order-12">
                <div class="service-wrap-content">
                    <div class="text-ft-h1">微信网站 轻松打造</div>
                    <p>通过微信公众号或服务号与手机网站进行对接，轻松打造和手机网站一样的微信营销网站，数据和手机网站同步，轻松实现微信营销。</p>
                    <img class="mt-5" src="{{asset('index/images/wechatdev/service/ser-img1_1.jpg')}}" alt="微信网站建设">
                </div>
            </div>
        </div>
    </section>
    <!-- 为什么需要建微信网站 -->
    <section class="service-wrap service-wrap-bg1">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-wrap-content text-center text-white">
                        <div class="text-ft-h1">为什么需要建微信网站?</div>
                        <p>中国手机网民规模已突破9亿，微信毫无疑问已是用户青睐的移动社交平台NO.1</p>
                        <p>四分之一微信用户每天打开微信的平均次数超过30次</p>
                        <p>74%微信用户重点关注企业和媒体公众号</p>
                        <p>基于庞大且活跃的用户群体，微信已建立了强大的影响力和生态粘合力</p>
                        <p>它不仅仅是聊天工具的载体，更是各企业家进行推广营销的利器</p>
                        <p>现在，如果哪位企业家还没弄明白什么是微信，为什么需要建微信网站，如何玩转微信营销？</p>
                        <p>那么很遗憾，您和您的企业品牌注定要被这个竞争激烈的微信营销时代淘汰出局</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 微信营销 无“微”不至 -->
    <section class="service-wrap service-wrap-bg2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-wrap-content text-center">
                        <div class="text-ft-h1">微信营销 无“微”不至</div>
                        <p>微信网站将为您的客户带来从售前到售后的全流程服务，让企业与客户的关系更加紧密</p>
                        <img src="{{asset('index/images/wechatdev/service/ser-img2.png')}}" alt="微信网站营销"
                             class="mt-5 img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- 8大解决方案，直击行业痛点 -->
    <section class="service-wrap service-wrap-bg3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="service-wrap-content text-center text-white">
                        <div class="text-ft-h1">8大解决方案，直击行业痛点</div>
                        <p>解决不同行业深度需求，落地多行业“互联网+”成熟方案</p>
                        <img src="{{asset('index/images/wechatdev/service/ser-img3.png')}}" alt="微信网站解决方案" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 最牛的营销互动功能 -->
    <section class="service-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="service-wrap-content text-center">
                        <div class="text-ft-h1">最牛的营销互动功能</div>
                        <p>每个人都有自己的光荣时刻，每个产品也有自己的辉煌瞬间，但所有的成就都属于过去在这个不断创新的世界，普擎科技和您一起，书写新的篇章</p>
                    </div>
                </div>
                <div class="w-100"></div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_1.jpg')}}" alt="快速建立微信分销渠道"></div>
                        <h5>全民店</h5>
                        <p class="text-muted">快速建立微信分销渠道</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_2.jpg')}}" alt="史上最强大的微信吸粉游戏"></div>
                        <h5>转发有礼</h5>
                        <p class="text-muted">史上最强大的微信吸粉游戏</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_3.jpg')}}" alt="在微信之中建立的商城"></div>
                        <h5>微商城</h5>
                        <p class="text-muted">在微信之中建立的商城</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_4.jpg')}}" alt="微信竞拍新方式"></div>
                        <h5>超级秒杀</h5>
                        <p class="text-muted">微信竞拍新方式</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_5.jpg')}}" alt="微信投票"></div>
                        <h5>新版投票</h5>
                        <p class="text-muted">同粉丝互动，刺激涨粉最有效</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_6.jpg')}}" alt="微信微社区"></div>
                        <h5>微社区</h5>
                        <p class="text-muted">“用户与用户”、“用户与平台”双向交流模式</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_7.jpg')}}" alt="微信智能订房系统"></div>
                        <h5>酒店预订</h5>
                        <p class="text-muted">微信智能订房系统</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_8.jpg')}}" alt="微信经纪人"></div>
                        <h5>全民经纪人</h5>
                        <p class="text-muted">全新的拓客渠道</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_9.jpg')}}" alt="微信支付 全新微信收款通道"></div>
                        <h5>微信支付</h5>
                        <p class="text-muted">全新微信收款通道</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_10.jpg')}}" alt="基于微信广泛传播的商务邀请函"></div>
                        <h5>微请柬</h5>
                        <p class="text-muted">基于微信广泛传播的商务邀请函</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_11.jpg')}}" alt="最热最IN微信互动"></div>
                        <h5>微现场</h5>
                        <p class="text-muted">最热最IN微信互动</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_12.jpg')}}" alt="微会员"></div>
                        <h5>微会员</h5>
                        <p class="text-muted">商家只要用原有实体卡扫，描枪扫描，即可验证会员卡信息</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_13.jpg')}}" alt="微贺卡"></div>
                        <h5>微贺卡</h5>
                        <p class="text-muted">用微贺卡在微信中传情</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_14.jpg')}}" alt="微游戏"></div>
                        <h5>微游戏</h5>
                        <p class="text-muted">互动营销小游戏</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_15.jpg')}}" alt="微相册"></div>
                        <h5>微相册</h5>
                        <p class="text-muted">专属精美动态相册</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_16.jpg')}}" alt="微官网"></div>
                        <h5>微官网</h5>
                        <p class="text-muted">让你的微网站与众不同</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_17.jpg')}}" alt="微外卖"></div>
                        <h5>微外卖</h5>
                        <p class="text-muted">微信版“淘点点”，操作简单，管理方便</p>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <div class="service-wrap-item">
                        <div class="service-wrap-item__img"><img
                                    src="{{asset('index/images/wechatdev/service/ser-img4_18.jpg')}}" alt="微名片"></div>
                        <h5>微名片</h5>
                        <p class="text-muted">普擎科技为您打造属于您的独一无二微名片</p>
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
