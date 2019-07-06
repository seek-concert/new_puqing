{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="index/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="index/css/bootstrap.min.css">
    <link rel="stylesheet" href="index/css/web-site-shop.css">
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
            <a href="{{url('/web_site_shop_b2b2c')}}" class="commom-navs-content__item active">
                <div class="commom-navs-content__icon iconfont">&#xe807;</div>
                <p class="commom-navs-content__title">B2B2C商城</p>
            </a>
            <a href="{{url('/web_site_shop_sale')}}" class="commom-navs-content__item">
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
                <a href="#" class="active" title="重庆B2B2C商城">B2B2C商城</a>
            </div>
        </div>
    </section>

    <!-- B2B2C解决方案优势 -->
    <section class="container shop-wrap">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="shop-wrap-b2b2cimg1"></div>
            </div>
            <div class="col-12 col-md-6">
                <div class="shop-wrap-content">
                    <div class="text-ft-h1 text-qblue">B2B2C解决方案优势</div>
                    <p>
                        B2B2C解决方案是指适合大规模、企业型网络运营商进行多元化电子商务服务支持的电子商务平台解决方案。整个解决方案中，不仅包含传统电子商务平台的建设部分，还扩展包含了ERP（CRM）、ERP（RFID会员卡号）、ERP（OMS）等多元化的电子商务辅助管理系统，真正帮助电商平台运营商打通供应商、平台商、分销商、消费者链条化商业管道，获得电子商务平台的纵深式持续化发展。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- B2B2C是网上商城的多商户平台 -->
    <section class="shop-wrap shop-wrap-b2b2cbg1">
        <div class="container text-white">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="text-ft-h1">B2B2C是网上商城的多商户平台</div>
                    <div class="row no-gutters py-3">
                        <div class="col">
                            <div class="border border-ligh rounded mx-1 p-2 text-center">
                                供应商入驻模式
                            </div>
                        </div>
                        <div class="col">
                            <div class="border border-ligh rounded mx-1 p-2 text-center">
                                买卖家分离模式
                            </div>
                        </div>
                        <div class="col">
                            <div class="border border-ligh rounded mx-1 p-2 text-center">
                                佣金结算模式
                            </div>
                        </div>
                        <div class="col">
                            <div class="border border-ligh rounded mx-1 p-2 text-center">
                                售后服务系统
                            </div>
                        </div>
                    </div>
                    <p>
                        B2B2C是网上商城的多商户平台，类似于淘宝、拍拍等第三方平台，允许众多商家在平台上
                        开设自己的店铺，从而参与网上零售交易。它是由B2B、B2C模式演变和完善而来，把B2B
                        和B2C完美的结合起来，通过B2B2C模式的电子商务企业构建自己的物流供应链系统，提供
                        统一的服务。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- B2B2C模式适用的客户 -->
    <section class="container shop-wrap">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="shop-wrap-b2b2cimg2"></div>
            </div>
            <div class="col-12 col-md-6">
                <div class="shop-wrap-content">
                    <div class="text-ft-h1 text-qblue">B2B2C模式适用的客户</div>
                    <div class="d-flex flex-column text-secondary">
                        <div class="shop-wrap-todo"><label class="iconfont text-qblue">&#xe603;</label>具有线下货源、物流、仓储或相关资源的大型企业客户。
                        </div>
                        <div class="shop-wrap-todo"><label class="iconfont text-qblue">&#xe603;</label>国企、媒体或专业服务于企业并具有独特资源的大型客户。
                        </div>
                        <div class="shop-wrap-todo"><label class="iconfont text-qblue">&#xe603;</label>大型门户、社区论坛等现有网络运营商。
                        </div>
                        <div class="shop-wrap-todo"><label class="iconfont text-qblue">&#xe603;</label>大型传统B2C电商平台运营企业或淘品牌大客户。
                        </div>
                        <div class="shop-wrap-todo"><label
                                    class="iconfont text-qblue">&#xe603;</label>适用于拥有大量消费者资源,想要把消费者价值最大化的企业，具有平台运营能力的企业。
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- B2B2C平台模式 与线下的购物中心类似-->
    <section class="shop-wrap shop-wrap-b2b2cbg2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="text-ft-h1">B2B2C平台模式 <br> 与线下的购物中心类似</div>
                    <p>
                        购物中心给品牌商、零售商提供营业场所，本质上做的是商业物业租赁。
                        B2B2C平台在网络空间中营造了一个虚拟购物中心，供商家进行经营活动。
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- B2B2C业务概述 -->
    <section class="shop-wrap">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8">
                    <div class="text-ft-h1">B2B2C业务概述</div>
                    <p>
                        平台职能：商家招募及有效管控 / 为消费者提供可靠的优质产品及服务 / 为商家提供开展电子商务所需服务
                        远景及规划：打造专业平台，稳步提升利润 / 充分利用线下运营经验，制定可行的发展计划 / 建立行业内更高的品牌形象
                        线上线下：线上线下业务互补 / 利用线上业务有效推动线下业务加速发展
                        融入电商：电子商务势不可挡，必须更加深刻的了解电子商务给传统行业带来的冲击和机会
                    </p>
                    <div class="w-100 pt-3">
                        <img src="{{asset('index/images/website/b2b2c-img3.jpg')}}" alt="B2B2C商城外包" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- B2B2C平台为商家和消费者提供价值 -->
    <section class="container shop-wrap">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="shop-wrap-b2b2cimg3"></div>
            </div>
            <div class="col-12 col-md-6">
                <div class="shop-wrap-content">
                    <div class="text-ft-h1">B2B2C平台为 <br> 商家和消费者提供价值</div>
                    <p>
                        客户资源/展示空间/IT资源/支付方式/物流/仓储/数据统计/等基础服务
                        一站式购物体验/优质产品保障
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 订单支付及结算-->
    <section class="shop-wrap shop-wrap-b2b2cbg3">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <div class="text-ft-h1">订单支付及结算</div>
                    <p>为提高消费者购物体验以及方便运营商获取交易抽水，平台提供了统一支付入口及统一结算体系</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 物流及仓储 -->
    <section class="container shop-wrap">
        <div class="row">
            <div class="col-12 col-md-6 order-md-12 order-0">
                <div class="shop-wrap-b2b2cimg4"></div>
            </div>
            <div class="col-12 col-md-6 order-md-0 order-12">
                <div class="shop-wrap-content">
                    <div class="text-ft-h1">物流及仓储</div>
                    <p>
                        通过订单处理模块以及对接第三方WMS系统实现供应商共同参与的订单分派及发货流程
                    </p>
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
    <script src="index/js/lib/jquery-1.9.0.min.js"></script>
    <script src="index/js/lib/bootstrap.min.js"></script>
    <script src="index/js/config.js"></script>
@endsection
