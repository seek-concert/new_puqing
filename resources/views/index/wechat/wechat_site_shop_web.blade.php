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
            <a href="{{asset('/wechat_site_shop_web')}}" class="commom-navs-content__item active">
                <div class="commom-navs-content__icon iconfont">&#xe806;</div>
                <p class="commom-navs-content__title">微B2B商城</p>
            </a>
            <a href="{{asset('/wechat_site_shop_b2b2c')}}" class="commom-navs-content__item">
                <div class="commom-navs-content__icon iconfont">&#xe807;</div>
                <p class="commom-navs-content__title">微B2B2C商城</p>
            </a>
            <a href="{{asset('/wechat_site_shop_sale')}}" class="commom-navs-content__item">
                <div class="commom-navs-content__icon iconfont">&#xe612;</div>
                <p class="commom-navs-content__title">微分销商城</p>
            </a>
        </div>
    </section>

    <section class="main-wrap">
        <div class="container-fluid">
            <div class="main-subtitle row pt-3">
                <a href="https://www.p7ing.com" title="普擎官网">首页</a>
                <a href="{{url('/wechat')}}" title="微信开发">微信开发</a>
                <a href="#" class="active" title="微B2B商城详情">微B2B商城</a>
            </div>
        </div>
    </section>

    <!-- 普擎B2B电商平台网站开发 -->
    <section class="main-wrap shop-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 order-md-12 order-0">
                    <div class="shop-wrap-webimg1"></div>
                </div>
                <div class="col-12 col-md-6 order-md-0 order-12">
                    <div class="shop-wrap-content">
                        <div class="text-ft-h1">普擎B2B电商平台网站开发</div>
                        <p>
                            在传统B2B电子商务平台构架的基础上，应用先进计算机软件技术，结合各企业的具体实情，通过严格地定制开发、精准的市场定位等，为企业搭建匹配度高、安全高效、实用性强的电子商务平台。普擎B2B电子商务平台能够与其他各软件系统兼容，实现与ERP系统、CRM系统等无缝链接，确保企业通过电子商务平台有序运转的信息实现超强集成，为企业实现利润最大化提供坚实的技术支撑。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- B2B电子商务网站核心功能 -->
    <section class="shop-wrap shop-wrap-webbg1">
        <div class="container text-center text-white">
            <div class="text-ft-h1">B2B电子商务网站核心功能</div>
            <p>
                B2B电子商务网站是指同为商家(或企业、公司)的供需双方使用互联网技术或各种商务网络平台，完成整个商务交易过程的网络平台。B2B电子商务网站为企业与企业之间有力地搭建起一座贸易桥梁，将企业内网与客户紧密结合起来，并通过互联网的快速反应，为客户提供更快更好的服务，促进企业业务发展。
            </p>
            <div class="w-100 pt-3">
                <img src="{{asset('index/images/website/b2b-img2.png')}}" alt="B2B电子商务网站核心功能" class="img-fluid">
            </div>
        </div>
    </section>

    <!-- 普擎B2B业务流程图 -->
    <section class="shop-wrap">
        <div class="container text-center">
            <div class="text-ft-h1">普擎B2B<span class="text-danger">业务</span>流程图</div>
            <p>
                普擎充分利用互联网根据企业的不同类型、规模、产品类型、发展战略等，进行专业化的电商平台开发，帮助传统企业进入电子化市场，让企业获得更多信息资源和商机；实现多种信息沟通渠道的集成，协助企业实现与客户直接对接与交流，在企业与客户之间建立良性交互渠道，提升企业客户服务水平、客户满意度和忠实度，实现企业网络形象的提升和网络市场的开拓与扩展。
            </p>
            <div class="w-100 pt-3">
                <img src="{{asset('index/images/website/b2b-img3.jpg')}}" alt="普擎B2B电子商务网站业务流程图" class="img-fluid">
            </div>
        </div>
    </section>

    <!-- B2B电子商务网站特点 -->
    <section class="shop-wrap">
        <div class="container text-center">
            <div class="text-ft-h1">B2B电子商务网站<span class="text-success">特点</span></div>
            <p>
                普擎充分利用互联网根据企业的不同类型、规模、产品类型、发展战略等，进行专业化的电子商务网站开发，帮助传统企业进入电子化市场，让企业获得更多信息资源和商机；实现多种信息沟通渠道的集成，协助企业实现与客户直接对接与交流，在企业与客户之间建立良性交互渠道，提升企业客户服务水平、客户满意度和忠实度，实现企业网络形象的提升和网络市场的开拓与扩展。
            </p>
            <div class="w-100">
                <img src="{{asset('index/images/website/b2b-img4.jpg')}}" alt="B2B电子商务网站特点" class="img-fluid">
            </div>
        </div>
    </section>

    <!-- B2B电子商务网站发展趋势 -->
    <section class="shop-wrap shop-wrap-webbg2">
        <div class="container text-center text-white">
            <div class="text-ft-h1">B2B电子商务网站发展趋势</div>
            <p>
                根据目前B2B电子商务网站发展的广度及深度，未来中国B2B电子商务网站模式将向纵深化和多样化方向发展，B2B平台的规模将不断壮大，参与成员将不断向各行业、各层次拓展，B2B电子商务网站的运营模式将不断创新，网上分销也将是未来B2B电子商务的发展趋势。
                而B2B电子商务网站建设将逐渐摆脱低水平竞争状态，逐步实现合作、整合，构建“互为平台”的电子商务服务新模式，充分发挥各自的优势，实现共同发展与提升。
            </p>
            <div class="w-100 pt-3">
                <img src="{{asset('index/images/website/b2b-img5.png')}}" alt="B2B电子商务网站发展趋势" class="img-fluid">
            </div>
        </div>
    </section>

    <!-- 普擎B2B电子商务 -->
    <section class="container shop-wrap">
        <div class="row">
            <div class="col-12 col-md-6 order-md-12 order-0">
                <div class="shop-wrap-webimg2"></div>
            </div>
            <div class="col-12 col-md-6 order-md-0 order-12">
                <div class="shop-wrap-content">
                    <div class="text-ft-h1">普擎B2B电子商务 <br> 网站的行业应用</div>
                    <p>
                        普擎强大的电子商务平台研发实力以及定制开发服务着眼，即可知其在面向集团、跨国公司、大型企业时，能够打造出适合各种规模、各个行业中企业发展壮大的B2B电子商务平台。普擎B2B电子商务平台支持集团和跨国公司实现产品销售与企业协作，并为集团用户实现电子商务化发展提供解决方案。普擎B2B电子商务网站应用行业广泛，从日化行业到汽车制造行业等均有成功案例。
                    </p>
                    <div class="w-100">
                        <img src="{{asset('index/images/website/b2b-img7.jpg')}}" alt="普擎B2B电子商务网站的行业应用" class="img-fluid">
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
