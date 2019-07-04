{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="{{asset('index/css/web-site-company-view.css')}}">
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
            <a href="{{url('/web_site_company_view')}}" class="commom-navs-content__item active">
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
                <a href="#" class="active" title="视觉形象展示网站详情">视觉形象展示网站</a>
            </div>
        </div>
    </section>
    <!-- 个性化网站建设 -->
    <section class="container webview-wrap webview-wrap1">
        <div class="row">
            <div class="col-12 col-md-6 order-md-12 order-0">
                <div class="webview-wrap-bg1"></div>
            </div>
            <div class="col-12 col-md-6 order-md-0 order-12">
                <div class="webview-wrap-content text-right">
                    <h1>个性化网站建设</h1>
                    <p>
                        顶尖的创意团队为您量身定制个性化企业网站建设，用最前沿的思维制作用户体验的高端网站，正是普擎的优势所在
                    </p>
                    <div class="row">
                        <div class="col-12">
                            <div class="webview-wrap-super__item justify-content-end">
                                <div class="webview-wrap-super__text">
                                    <h5>创意</h5>
                                    <p>您的专用私人创意设计供应商</p>
                                </div>
                                <div class="iconfont">&#xe6db;</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="webview-wrap-super__item justify-content-end">
                                <div class="webview-wrap-super__text">
                                    <h5>视野</h5>
                                    <p>国际化视野、独树一帜的风格体现</p>
                                </div>
                                <div class="iconfont">&#xe610;</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="webview-wrap-super__item justify-content-end">
                                <div class="webview-wrap-super__text">
                                    <h5>团队</h5>
                                    <p>强大的设计力量和技术团队</p>
                                </div>
                                <div class="iconfont">&#xe654;</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="webview-wrap-super__item justify-content-end">
                                <div class="webview-wrap-super__text">
                                    <h5>服务</h5>
                                    <p>标准化作业体系，独享的顾问式贴身服务</p>
                                </div>
                                <div class="iconfont">&#xe648;</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 关于个性化网站定制 -->
    <section class="webview-wrap webview-wrap2">
        <div class="container main-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="webview-wrap-bg2"></div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="webview-wrap-content">
                        <h1>关于个性化网站定制</h1>
                        <p> 您需要我们给您打造一个有文化、有价值的企业网站 普擎科技，为您量身定制您的赚钱企业网站</p>
                        <ul class="webview-wrap2-list">
                            <li>不知道怎么利用网站赚钱？ </li>
                            <li>有了网站，不过网站实在看不下去？ </li>
                            <li>网站没有功能，时常出现问题，不能用？ </li>
                            <li>投做了付费推广一直在亏钱？ </li>
                            <li>投钱给了优化推广，却没效果？</li>
                            <li>同行已经通过网站开始赚钱了</li>
                            <li>自己也想通过网站赚钱？</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 您需要这样一个个性化企业网站！ -->
    <section class="container webview-wrap webview-wrap1">
        <div class="row">
            <div class="col-12 col-md-6 order-md-12 order-0">
                <div class="webview-wrap-bg3"></div>
            </div>
            <div class="col-12 col-md-6 order-md-0 order-12">
                <div class="webview-wrap-content text-right">
                    <h1>您需要这样一个个性化企业网站</h1>
                    <p>您需要我们给您打造一个有文化、有价值的企业网站</p>
                    <ul class="webview-wrap1-list">
                        <li>您需要一个可以展示您公司形象的企业网站！</li>
                        <li>您需要一个可以体现您公司业务及优势的网站？</li>
                        <li>您需要一个网站来宣传您的品牌！</li>
                        <li>您需要一个网站来获得更多潜在客户！</li>
                        <li>您需要一个网站来获得大笔订单！</li>
                        <li>您需要一个网站来建立一个营销平台！</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 网站太过简单，没什么实际功能？ -->
    <section class="webview-wrap webview-wrap3">
        <div class="container main-body">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="webview-wrap-bg4"></div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="webview-wrap-content">
                        <h1>网站太过简单，没什么实际功能？</h1>
                        <p>只能看不能用的不叫营销型网站</p>
                        <div class="webview-wrap3-text">
                            <p>您的网站设计看得过去，不过没有预期想要的功能，实际应用不大，只能看不能用。</p>
                            <p>我们将为您的营销型网站建立双方沟通的机制，让您在线了解客户需求，设置留言系统，查询服务等，</p>
                            <p>只有您需要，我们的程序员会帮您实现您的想法，让您的网站不仅能看而且很实用。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 视觉形象展示官网设计制作流程 -->
    <section class="container webview-wrap text-center">
        <div class="row justify-content-center">
            <div class="col-10">
                <h1 class="mb-md-4">视觉形象展示官网设计制作流程</h1>
            </div>
            <div class="w-100"></div>
            <div class="col-12 mt-md-5">
                <div class="w-100 m-auto d-none d-lg-block"><img src="{{asset('index/images/website/web-step.jpg')}}" alt="视觉官网设计制作"></div>
                <div class="webview-wrap-step">
                    <div class="webview-wrap-step__item">
                        <h6>1.需求沟通</h6>
                        <p>倾听客户需求，了解用户使用环境和操作流程</p>
                    </div>
                    <div class="webview-wrap-step__item">
                        <h6>2.项目策划</h6>
                        <p>头脑风暴交互情景模拟原型设计</p>
                    </div>
                    <div class="webview-wrap-step__item">
                        <h6>3.交互设计</h6>
                        <p>头脑风暴交互情景模拟原型设计</p>
                    </div>
                    <div class="webview-wrap-step__item">
                        <h6>4.视觉创意</h6>
                        <p>视觉及平面元素设定结构和布局规范确认</p>
                    </div>
                    <div class="webview-wrap-step__item">
                        <h6>5.前端制作</h6>
                        <p>CSS3、JS、HTML5实现页面的动态展示</p>
                    </div>
                    <div class="webview-wrap-step__item">
                        <h6>6.技术开发</h6>
                        <p>移动应用数据对接与开发</p>
                    </div>
                    <div class="webview-wrap-step__item">
                        <h6>7.测试反馈</h6>
                        <p>测试反馈修改调整，规范完善</p>
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
