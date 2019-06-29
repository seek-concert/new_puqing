<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>重庆网站建设_网站外包_网站开发_网站制作_微信小程序开发-重庆普擎科技</title>
    <meta name="keywords" content="重庆网站建设,网站外包,重庆网站设计,重庆网站外包,重庆网站开发,网站制作建设公司,做建网站公司,重庆微信开发,微信公众号开发">
    <meta name="description" content="重庆普擎科技提供网页/APP UI设计，微信小程序开发、电商网站专属定制、重庆自适应网站外包、网站建设开发制作一条龙等整合策划与视觉执行，为品牌赋予新鲜且有新意的创意与体现,来自重庆网站建设开发制作外包的普擎科技。">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="applicable-device" content="pc,mobile">
    <meta name="renderer" content="webkit">
    {{--  csrf令牌 --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="canonical" href="/">
    <link rel="stylesheet" href="{{asset('index/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/bootstrap.min.css')}}">
    @yield('css')
</head>

<body>
<!-- 导航栏 -->
<header class="main-header">
    <div class="main-view">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="/" title="首页跳转"><img src="{{asset('index/images/logo.png')}}" alt="普擎科技 LOGO"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/" title="重庆普擎科技官网">首页 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/web')}}">网站建设</a>
                        <span class="hot iconfont">&#xe7a8;</span>
                        <div class="childnav">
                            <div class="main-view d-flex align-items-center">
                                <div class="childnav-left">
                                    <img src="{{asset('index/images/website/Laptosss.png')}}" alt="">
                                </div>
                                <div class="childnav-right">
                                    <a href="{{url('/web')}}?index=0" class="childnav-link">
                                        <div class="childnav-link-icon"><img src="{{asset('index/images/website/Bag.png')}}" alt=""></div>
                                        <div class="childnav-link-name"><span>——</span> 商城网站 </div>
                                    </a>
                                    <a href="{{url('/web')}}?index=1" class="childnav-link">
                                        <div class="childnav-link-icon"><img src="{{asset('index/images/website/Laptop.png')}}" alt=""></div>
                                        <div class="childnav-link-name"><span>——</span> 企业官网 </div>
                                    </a>
                                    <a href="{{url('/web')}}?index=2" class="childnav-link">
                                        <div class="childnav-link-icon"><img src="{{asset('index/images/website/mobilephole.png')}}" alt=""></div>
                                        <div class="childnav-link-name"><span>——</span> 手机网站 </div>
                                    </a>
                                    <a href="{{url('/web')}}?index=3" class="childnav-link">
                                        <div class="childnav-link-icon"><img src="{{asset('index/images/website/Home.png')}}" alt=""></div>
                                        <div class="childnav-link-name"><span>——</span> 门户网站 </div>
                                    </a>
                                    <a href="{{url('/web')}}?index=4" class="childnav-link">
                                        <div class="childnav-link-icon"><img src="{{asset('index/images/website/Monitor.png')}}" alt=""></div>
                                        <div class="childnav-link-name"><span>——</span> 后台管理系统 </div>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/wechat')}}">微信开发</a>
                        <span class="hot iconfont">&#xe7a8;</span>
                        <div class="childnav wechatnav">
                            <div class="main-view d-flex text-center">
                                <a href="{{url('/wechat')}}?index=0" class="wechatnav-item border-right">
                                    <div class="p-5">
                                        <i class="iconfont">&#xe600;</i>
                                        <h3>公众号</h3>
                                    </div>
                                </a>
                                <a href="{{url('/wechat')}}?index=1" class="wechatnav-item border-right">
                                    <div class="p-5">
                                        <i class="iconfont">&#xe611;</i>
                                        <h3>小程序</h3>
                                    </div>
                                </a>
                                <a href="{{url('/wechat')}}?index=2" class="wechatnav-item border-right">
                                    <div class="p-5">
                                        <i class="iconfont">&#xe650;</i>
                                        <h3>微商城</h3>
                                    </div>
                                </a>
                                <a href="{{url('/wechat')}}?index=3" class="wechatnav-item">
                                    <div class="p-5">
                                        <i class="iconfont">&#xe6f3;</i>
                                        <h3>微服务</h3>
                                    </div>
                                </a>
                            </div>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/app')}}">软件定制</a>
                        <span class="hot iconfont">&#xe7a8;</span>
                        <div class="childnav softnav">
                            <div class="main-view d-flex">
                                <div class="childnav-left">
                                    <h3>解决方案</h3>
                                    <div class="softnav-left">
                                        <div class="softnav-left-item">
                                            <img src="{{asset('index/images/solu1.png')}}" alt="">
                                            <div class="softnav-left-cont">
                                                <h5>智能硬件行业</h5>
                                                <p>智能硬件应用设计开发方案是 WiFi/4G 无线控制管理平台，通过移动终端，监控各种智能设备，并实现设备之间的互联互通，为用户提供多元的情景生活体验。</p>
                                            </div>
                                        </div>
                                        <div class="softnav-left-item">
                                            <img src="{{asset('index/images/solu2.png')}}" alt="">
                                            <div class="softnav-left-cont">
                                                <h5>移动电商行业</h5>
                                                <p>提供移动电商/商城APP及小程序设计开发解决方案，为企业定制个性化电子商务平台，拥有多个电商小程序、微分销商城、电商APP定制成功案例。</p>
                                            </div>
                                        </div>
                                        <div class="softnav-left-item">
                                            <img src="{{asset('index/images/solu3.png')}}" alt="">
                                            <div class="softnav-left-cont">
                                                <h5>数字金融行业</h5>
                                                <p>提供网上支付、移动支付、网上银行、金融服务外包及网上贷款、网上保险、网上基金等互联网金融产品的设计开发解决方案。</p>
                                            </div>
                                        </div>
                                        <div class="softnav-left-item">
                                            <img src="{{asset('index/images/solu4.png')}}" alt="">
                                            <div class="softnav-left-cont">
                                                <h5>网络营销行业</h5>
                                                <p>基于互联网络及社会关系网络连接企业、用户及公众，向用户及公众传递有价值的信息和服务，为实现顾客价值及企业营销目标所进行的规划、实施及运营管理活动。</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="childnav-right">
                                    <div class="nav flex-column" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-oriapp-tab" data-toggle="pill" href="#v-pills-oriapp"
                                           role="tab" aria-controls="v-pills-oriapp" aria-selected="true">
                                            <h3>原生APP</h3>
                                        </a>
                                        <a class="nav-link" id="v-pills-webapp-tab" data-toggle="pill" href="#v-pills-webapp" role="tab"
                                           aria-controls="v-pills-webapp" aria-selected="false">
                                            <h3>WEB APP</h3>
                                        </a>
                                        <a class="nav-link" id="v-pills-items-tab" data-toggle="pill" href="#v-pills-items" role="tab"
                                           aria-controls="v-pills-items" aria-selected="false">
                                            <h3>项目流程</h3>
                                        </a>
                                    </div>
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-oriapp" role="tabpanel"
                                             aria-labelledby="v-pills-oriapp-tab">
                                            <img src="{{asset('index/images/softcreat/soft-img1.png')}}" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-webapp" role="tabpanel"
                                             aria-labelledby="v-pills-webapp-tab">
                                            <img src="{{asset('index/images/softcreat/soft-img1.png')}}" alt="">
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-items" role="tabpanel" aria-labelledby="v-pills-items-tab">
                                            <img src="{{asset('index/images/softcreat/soft-img3.png')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/case')}}">成功案例</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/news')}}">新闻资讯</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/about')}}">关于普擎</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- 导航栏end -->

<!-- content -->
@yield('content')
<!-- content end-->

<!-- 右边导航 -->
<div class="dual dual-right">
    <ul>
        <li class="easein" onclick="location.href='tel:15923774622'">
            <div class="dual-info">电话咨询</div>
            <em class="iconfont">&#xeb98;</em>
        </li>
        <li class="easein" onclick="location.href='http://wpa.qq.com/msgrd?v=3&amp;uin=6230200&amp;site=qq&amp;menu=yes'">
            <div class="dual-info">QQ咨询</div>
            <em class="iconfont">&#xeb9b;</em>
        </li>
        <li class="easein" onclick="alert(111)">
            <div class="dual-info">在线咨询</div>
            <em class="iconfont">&#xeba0;</em>
        </li>
        <li>
            <div class="dual-ewm">
                <img src="{{asset('index/images/wx.jpg')}}" alt="">
            </div>
            <em class="iconfont">&#xeba1;</em>
        </li>
        <li id="sTop">
            <em class="iconfont">&#xeb94;</em>
        </li>
    </ul>
</div>
<!-- 右边导航end -->

<!-- js -->
<script type="text/javascript" src="{{asset('index/js/lib/jquery-1.9.0.min.js')}}"></script>
<script type="text/javascript" src="{{asset('index/js/lib/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('index/js/config.js')}}"></script>
@yield('js')
<!-- js end -->
</body>
</html>