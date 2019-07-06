{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="index/css/web-site-html5.css">
@endsection

{{-- Content --}}
@section('content')
    <!-- banner -->
    <section class="commom-banner"></section>

    <section class="main-wrap">
        <div class="container-fluid">
            <div class="main-subtitle row pt-3">
                <a href="https://www.p7ing.com" title="普擎官网">首页</a>
                <a href="{{url('/web')}}" title="网站建设">网站建设</a>
                <a href="#" class="active" title="手机网站详情">手机网站</a>
            </div>
        </div>
    </section>
    <!-- 一、Html5手机站开发概述 -->
    <section class="container html5-wrap">
        <div class="row">
            <div class="col-12 justify-content-center">
                <div class="text-ft-h1 text-center">一、Html5手机站开发概述</div>
                <p>
                    Html5app开发就是HTML5开发语言制作的移动手机网站。移动站点顾名思义，就是指一切用移动终端访问的网络站点（通常指网站），像通常用的手机、PAD（平板电脑）等都属于移动终端。传统常会称呼移动站点为wap网站即手机网页站。
                </p>
                <p>HTML5是一门网页前端开发技术，经历过HTML2、HTML3、HTML4、XHTML、HTML5等大体的几个阶段，现在HTML5为最新的前端技术，通过它能实现相对比较炫的效果。
                </p>
                <p>
                    HTML5
                    本身就是就是移动应用平台，具有移动应用平台所需的所有元素，是近十年来Web开发标准最巨大的飞跃。和以前的版本不同是HTML5并非仅仅用来表示Web容，它的新使命是将Web带入一个成熟的应用平台，在HTML5平台上，视频、音频、图象、动画、以及同手机或电脑的交互都被标准化。
                </p>
            </div>
        </div>
    </section>

    <!-- 二、Html5手机站开发趋势 -->
    <section class="html5-wrap html5-wrap-bg1">
        <div class="container text-white">
            <div class="row">
                <div class="col-12 col-md-5 order-md-12 order-0">
                    <div class="html5-wrap-img1"></div>
                </div>
                <div class="col-12 col-md-7 order-md-0 order-12">
                    <div class="html5-wrap-content">
                        <div class="text-ft-h1">二、Html5手机站开发趋势</div>
                        <h6>1、移动优先</h6>
                        <p>
                            从如今层出不穷的移动应用就知道，在这个智能手机和将平板电脑大爆炸的时代，移动优先已成趋势，不管是开发什么，都以移动为主。许多游戏开发商也将在移动Web应用中扮演中重要角色，移动Web应用优先的趋势将会持续到移动设备统治信息处理领域。
                        </p>
                        <h6>2、游戏开发者领衔“主演”</h6>
                        <p>
                            其实移动游戏开发商是从HTML5获益最多的一方，他们可利用这个平台逃脱付费游戏须向苹果支付的30%提成。在某种程度上，游戏就是移动平台销量最好的应用，也是吸引人们购买移动设备的一个重要因素。
                        </p>
                        <h6>3、响应式设计 & 自动变化的屏幕尺寸</h6>
                        <p>在HTML5真的改变移动开发平台之前，必须要迈出重要一步，那就是“响应式设计”，也就是屏幕可以根据内容而自动调整大小。</p>
                        <h6>4、设备访问</h6>
                        <p>在HTML5真的改变移动开发平台之前，必须要迈出重要一步，那就是“响应式设计”，也就是屏幕可以根据内容而自动调整大小。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 三、企业为何开发Html5手机站 -->
    <section class="html5-wrap html5-wrap-bg2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5">
                    <div class="html5-wrap-img2"></div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="html5-wrap-content">
                        <div class="text-ft-h1">三、企业为何开发Html5手机站</div>
                        <p>
                            未来，基于HTML5的Web
                            App将成为手机上的主流应用形式。HTML5可以直接在网页上进行修改和调试的大优势将会受到更多APP开发人员的青睐，HTML5也会成为移动互联网未来开发APP的主要技术语言。因此，APP应用软件开发商现在就需要多研究以及关注HTML5技术，只要先于竞争对手一步研究HTML5
                            app开发，就可以获得抢占Web APP开发市场的先机。
                        </p>
                        <p>依照目前iPhone/Android迅速提升市场占有率的情势来看，未来如果想要在先进的智能手机上撰写应用程式，要不是选择使用Objective-C + Cocoa Touch
                            Framework撰写iPhone/iPad
                            应用程式，就是选择Java + Android
                            Framework撰写Android应用程序，如果想要同时支持两种平台，势必要维护两套程式码，对于刚起步的小型服务商而言这也是个小有负担的维护运营成本。不过HTML5的出现改变了小型服务商的这一困境，html5开发的APP应用可以很好的在IOS和安卓系统平台上流畅运行，让小型服务商只需要开发一款html5
                            APP就可以了，不再需要大花价钱去分别制作IOS APP和Android APP。</p>
                        <div class="w-100 pt-3">
                            <div class=""></div>
                            <img src="{{asset('index/images/website/html5-img2_1.jpg')}}" alt="手机网站建设" class="img-fluid">
                            <img src="{{asset('index/images/website/html5-img2_2.jpg')}}" alt="手机网站外包" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 四、Html5开发优势 -->
    <section class="html5-wrap html5-wrap-bg3">
        <div class="container text-white">
            <div class="row">
                <div class="col-12 col-md-5 order-md-12 order-0">
                    <div class="html5-wrap-img3"></div>
                </div>
                <div class="col-12 col-md-7 order-md-0 order-12">
                    <div class="html5-wrap-content">
                        <div class="text-ft-h1">四、Html5开发优势</div>
                        <h6>1、手机网站移动体验好</h6>
                        <p>
                            当用户使用手机浏览器访问您的网站时，给他呈现的并非您的PC网站，而是自动检测使用设备后显示的html手机站，网站更符合移动端操作习惯，用起来更流畅。
                        </p>
                        <h6>2、手机网站推广成本低</h6>
                        <p>
                            推广一个html手机站几乎不需要太大成本，用户只要联网，就可以扫码或者输入网址直接访问体验，相较于APP应用还需要下载应用等繁复的操作，用户更愿意在html进行初次试用体验。
                        </p>
                        <h6>3、手机网站建站速度快</h6>
                        <p>html已存在多年，开发技术成熟，也为HTML手机站的开发速度提供了一定的保证，如果说开发一个APP需要至少2个月，那么一个html手机站只需要一半不到的时间。</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 五、哪些浏览器能够运行html5 -->
    <section class="html5-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="html5-wrap-img4"></div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="html5-wrap-content">
                        <div class="text-ft-h1">五、哪些浏览器能够运行html5</div>
                        <h6>1、Mozilla Firefox 浏览器</h6>
                        <p>Mozilla基金会与开源社区共同开发的一种免费开源的web浏览器，时间在占有率仅次于IE， 优点：最符合web标准规范和高程序执行效率，可用于多种操作系统，包括PC Windows、Linux、Mac OS
                            X。</p>
                        <h6>2、Apple Safari 浏览器</h6>
                        <p>美国苹果公司开发的开源内核的web浏览器，支持HTML 5、CSS3技术，主要用于Mac OS X，也支持普通的PC Windows操作系统，在iphonehe
                            ipad等手持智能设备也能找到safari的身影。</p>
                        <h6>3、Opera 浏览器</h6>
                        <p>挪威Opera Software ASA开发特色：高速度、多功能、体积小且部署灵活，具有很高的可定制性，Opra是首个支持HTML 5和CSS
                            3的web浏览器，支持多种操作系统，PC Windows、Linux、Mac OS X和各类Unix系统。
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 六、HTML5开发盈利模式 -->
    <section class="html5-wrap html5-wrap-bg4">
        <div class="container text-center text-white">
            <div class="row">
                <div class="col-12">
                    <div class="text-ft-h1">六、HTML5开发盈利模式</div>
                    <p>
                        在过去5年，手机应用为欧洲的经济贡献了100亿以上的收益。对于游戏开发者，利润是相当重要的。对于大部分简单且容易玩的流行游戏，无论是HTML5还是本地应用，那种程度的用户体验都是很容易达到的。因此，决定使用哪个平台归根到底取决于开发想让游戏如何赢利。
                    </p>
                    <p>
                        对于本地应用，商业框架和赢利工具通常与原设备制造商支持的系统紧密相关。苹果就是一个例子，虽然它保证应用高度案例，但它拿走了30%的代理费。本地应用的支付选项可能很少，意味着你必须使用应用商店所支持的支付系统（Android
                        Market的新版GooglePlay也是如此），尽管应用商店的数量越来越多，其支持的支付渠道也越来越多，比如电信账单支付。如果支付过程顺畅的话（酷蜂科技注：比如“一键支付”），选项有限也没关系，但消费者喜欢灵活省时的方法，输入信用卡号或登录帐号可能会让消费者放弃支付。国内消费者更喜欢使用灵活的网银在线支付、支付宝网页支付、微信扫码支付等简单快捷的支付方式。
                    </p>
                    <div class="w-100 pt-3">
                        <img src="{{asset('index/images/website/html5-img5.jpg')}}" alt="HTML5开发盈利模式" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 七、普擎科技HTML5开发能够带来什么 -->
    <section class="html5-wrap">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <div class="text-ft-h1">七、普擎科技HTML5开发能够带来什么</div>
                    <p>重庆HTML5 app开发公司普擎科技开发团队带来的Web
                        App通过手机客户端软件的形式来展现给最终客户。能够让企业的客户在手机上安装以后，随时随地看到企业的信息，如产品展示，公司简介，位置信息等，并可以直接通过手机联系到企业，而无须手机联网传输数据。</p>
                    <p>UI设计：符合苹果官方要求，美观大方。</p>
                    <p>研发：符合手机软件研发规范，程序经多种优化，内存控制良好，运行流畅。</p>
                    <p>测试：分别就系统版本，分辨率，硬件匹配进行全方位测试。</p>
                    <p>推广：快速发布于HTML5app应用市场，通过率高。</p>
                    <p>服务：终身免费Bug修复服务，确保软件终身正常运行</p>
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
