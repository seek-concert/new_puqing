{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="/index/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="/index/css/web-site-shop.css">
@endsection

{{-- Content --}}
@section('content')
    <!-- banner -->
    <section class="commom-banner"></section>

    <section class="commom-navs">
        <div class="commom-navs-content">
            <a href="{{url('/web_site_shop_web')}}" class="commom-navs-content__item">
                <div class="commom-navs-content__icon iconfont">&#xe806;</div>
                <p class="commom-navs-content__title">B2B商城</p>
            </a>
            <a href="{{url('/web_site_shop_b2b2c')}}" class="commom-navs-content__item">
                <div class="commom-navs-content__icon iconfont">&#xe807;</div>
                <p class="commom-navs-content__title">B2B2C商城</p>
            </a>
            <a href="{{url('/web_site_shop_sale')}}" class="commom-navs-content__item active">
                <div class="commom-navs-content__icon iconfont">&#xe612;</div>
                <p class="commom-navs-content__title">分销商城</p>
            </a>
        </div>
    </section>

    <section class="main-wrap">
        <div class="container-fluid">
            <div class="main-subtitle row pt-3">
                <a href="https://www.p7ing.com" title="普擎官网">首页</a>
                <a href="{{url('/web')}}" title="重庆网站建设">网站建设</a>
                <a href="#" class="active" title="重庆分销商城">分销商城</a>
            </div>
        </div>
    </section>

    <!-- 分销商城产品介绍 -->
    <section class="container shop-wrap">
        <div class="row">
            <div class="col-12 col-md-6 order-md-12 order-0">
                <div class="shop-wrap-saleimg1"></div>
            </div>
            <div class="col-12 col-md-6 order-md-0 order-12">
                <div class="shop-wrap-content">
                    <div class="text-ft-h1">分销商城产品介绍</div>
                    <p>
                        分销系统是专门针对PC、微信和移动端客户量身定制的掌上分销商城，是微信商城+手机版商城于一体的移动云商城分销系统，实现了多平台跨渠道统一后台的高效管理。集现有两种固定分销模式及定制开发分销系统于一身。全方位为用户提供合理，适用于您企业实际营销的解决方案.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 多终端展现 玩赚分销 -->
    <section class="shop-wrap shop-wrap-salebg1">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="text-ft-h1">多终端展现 玩赚分销</div>
                    <div class="w-100">
                        <img src="{{asset('index/images/website/shopsale-img2.png')}}" alt="分销商城建设外包" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 商城分销系统技术架构 ！ -->
    <section class="container shop-wrap">
        <div class="row">
            <div class="col-12 col-md-6 order-md-12 order-0">
                <div class="shop-wrap-saleimg2"></div>
            </div>
            <div class="col-12 col-md-6 order-md-0 order-12">
                <div class="shop-wrap-content">
                    <div class="text-ft-h1">商城分销系统技术架构 ！</div>
                    <p>
                        我们的商城平台定位于营销型、互动型、赢利型的企业电子商务系统。提供电子商务标准化、网络支付多样化、售后服务一体化等整套解决方案。将电子商务与传统商业模式紧紧相结合。让您成本更低、实施周期更短、功能更完善、性能更优越、操作更简单等特性。
                        整个平台采用大型网站的多站点分布式系统架构方式，由8个子系统构成。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 下线越多会员吸金越多   单号卖货越多佣金越多 -->
    <section class="shop-wrap shop-wrap-salebg2">
        <div class="container text-white">
            <div class="row">
                <div class="col-12 col-md-9">
                    <div class="text-ft-h1">下线越多会员吸金越多 单号卖货越多佣金越多</div>
                    <p>
                        分销高收益，实实在在算得到，下线越多收益就越大。同等的您的商品也就卖越多！
                    </p>
                    <ol>
                        <li class="pt-md-3">关注即为基础用户;</li>
                        <li class="pt-md-3">基础用户发展了10个基础用户，可以拿自己首笔定单的金额返利%;</li>
                        <li class="pt-md-3">下级关注购买人数达标可升级;</li>
                        <li class="pt-md-3">达标后可以享受下级用户订单的总金额返利比例;</li>
                        <li class="pt-md-3">享受与自己级别相当用户的固定金额返利;</li>
                        <li class="pt-md-3">下级超过自己级别后，不再享受返利;</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!-- 所有商品库存与总店库存 实时同步,轻松管理千万家微店。 -->
    <section class="container shop-wrap">
        <div class="row">
            <div class="col-12 col-md-6 order-md-12 order-0">
                <div class="shop-wrap-saleimg3"></div>
            </div>
            <div class="col-12 col-md-6 order-md-0 order-12">
                <div class="shop-wrap-content">
                    <div class="text-ft-h1">所有商品库存与总店库存 <br> 实时同步,轻松管理千万家微店。</div>
                    <div class="d-flex flex-column text-secondary">
                        <div class="shop-wrap-todo"><label class="iconfont text-danger">&#xe603;</label>演变为成千上万个分销店铺；
                        </div>
                        <div class="shop-wrap-todo"><label class="iconfont text-danger">&#xe603;</label>万店同源，轻松管理；</div>
                        <div class="shop-wrap-todo"><label class="iconfont text-danger">&#xe603;</label>零库存压力。</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 万客合一，数据独立 迅速积累万千粉丝 -->
    <section class="container shop-wrap">
        <div class="row text-center">
            <div class="col-12">
                <div class="text-ft-h1">万客合一，数据独立迅速积累万千粉丝</div>
            </div>
            <div class="col-12">
                <div class="shop-wrap-saleimg4"></div>
            </div>
        </div>
    </section>


    <!-- 快速开店，规模效益-->
    <section class="shop-wrap shop-wrap-salebg3">
        <div class="container text-center text-white">
            <div class="row justify-content-center">
                <div class="col-12 col-md-9">
                    <div class="text-ft-h1"><span class="text-qblue">快速</span> 开店，<span class="text-qblue">规模</span> 效益 <br>
                        <small>分销商零投入</small>
                    </div>
                    <div class="design">转发<span class="text-warning">10</span>万次好友x<span class="text-warning">1</span>%转化率x<span
                                class="text-warning">100</span>元x<span class="text-warning">365</span>天= <span
                                class="text-warning">3650</span>万
                    </div>
                    <div class="row pt-5 justify-content-conter align-items-center">
                        <div class="col-12 col-md">
                            <div class="border border-light rounded p-2">
                                <p>1个人开店，传播200位好友</p>
                                <p>100个人开店，传播2万位好友</p>
                                <p>500人开店，即可传播10万位好友</p>
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <div class="design">按常规网购转化率 <span class="text-warning">1</span> %客单价 <span
                                        class="text-warning">100</span> 元计算
                            </div>
                        </div>
                        <div class="col-12 col-md">
                            <div class="border border-light rounded p-2 text-info">
                                <p>每天多售出1000件商品</p>
                                <p>每天可新增营业额近10万</p>
                                <p>每年可增3650万</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- 多种支付方式并存 -->
    <section class="container shop-wrap">
        <div class="row text-center">
            <div class="col-12">
                <div class="text-ft-h1 text-danger">多种
                    <small class="text-dark">支付方式并存</small>
                </div>
                <p>每一款商品生成独一无二的二维码，即使消费者没有关注商家的公众号，也可下单购买。对接支付宝、微信支付、财付通、信用卡、环迅支付等其他第三方支付通道，实现支付功能，也可以使用银联支付。</p>
            </div>
            <div class="col-12">
                <div class="shop-wrap-saleimg5"></div>
            </div>
        </div>
    </section>

    <!-- 自动生成二级店铺的推广-->
    <section class="shop-wrap shop-wrap-salebg4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 pt-md-5">
                    <div class="text-ft-h1 pl-md-5"> 自动生成二级店铺的推广 <br> 二维码以及URL地址 </div>
                    <p class="pl-md-5">系统自动给每个会员生成各自二级店铺的唯一二维码，可以嵌入到会员个人的公众号，助力于会员营销推广。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 强大的促销模块，刺激购物转化率的强力保障-->
    <section class="shop-wrap shop-wrap-salebg5">
        <div class="container text-center text-white">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="text-ft-h1 pl-md-5"> 强大的<span class="text-warning">促销模块</span>，刺激购物<br> 转化率的强力保障 </div>
                    <p class="pl-md-5">多样化的促销功能，满足日常促销活动和大型特卖，灵活简易的的设置轻松搞定。</p>
                    <div class="w-100"><img src="{{asset('index/images/website/shopsale-img7.png')}}" alt="分销商城促销"
                                            class="img-fluid"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 全网分销子店8大特有功能 -->
    <section class="container shop-wrap text-center">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="text-ft-h1 mb-md-4">全网分销子店8大特有功能</div>
            </div>
            <div class="w-100"></div>
            <div class="col-12 mt-md-5">
                <div class="w-100 m-auto d-none d-lg-block"><img
                            src="{{asset('index/images/website/shopsale-img8.jpg')}}" alt="分销网站建设"></div>
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
    <script src="/index/js/lib/jquery-1.9.0.min.js"></script>
    <script src="/index/js/lib/bootstrap.min.js"></script>
    <script src="/index/js/config.js"></script>
@endsection
