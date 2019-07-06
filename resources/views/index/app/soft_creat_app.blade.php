{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="index/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="index/css/bootstrap.min.css">
    <link rel="stylesheet" href="index/css/soft-creat-app.css">
@endsection

{{-- Content --}}
@section('content')
    {{-- 主体 --}}
    <!-- banner -->
    <section class="softapp-banner d-flex flex-column  align-items-center text-center">
        <h1 class="px-4 py-2 border">APP定制开发</h1>
    </section>

    <section class="main-wrap">
        <div class="container-fluid">
            <div class="main-subtitle row pt-3">
                <a href="https://www.p7ing.com" title="普擎官网">首页</a>
                <a href="{{url('/app')}}" title="软件定制">软件定制</a>
                <a href="#" class="active" title="APP软件定制开发详情">APP软件定制开发</a>
            </div>
        </div>
    </section>
    <!-- 软件开发 -->
    <section class="main-wrap softapp-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">软件开发</h2>
                    <p class="text-96">
                        移动互联网导致了大量APP应用盛行，这种互联网的机遇对专做APP开发企业来说是可遇不可求。久而久之就会出现以手机APP为平台的全新的商业模式，众多企业也纷纷转型移动互联网。对比传统的营销方式，开发一款自己的企业APP就显得尤为重要。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- IOS APP开发优势 -->
    <section class="softapp-wrap main-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">IOS APP开发优势</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-12 col-md-4">
                    <div class="softapp-wrap-card">
                        <div class="softapp-wrap-card__img">
                            <img src="{{asset('index/images/softcreat/app/uIOS_img1.png')}}" alt="原生软件开发优势">
                        </div>
                        <div class="softapp-wrap-card__cont">
                            <h5>IOS APP营收更容易</h5>
                            <p>
                                相对于Android用户来说，iPhone用户具有较高的消费能力，一方面来说苹果用户较为宽裕，另一方面IOS系统支付方式也很方便。同一个应用，同时在苹果与安卓平台上面运营，用户更愿意在苹果平台进行消费。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="softapp-wrap-card">
                        <div class="softapp-wrap-card__img">
                            <img src="{{asset('index/images/softcreat/app/uIOS_img2.png')}}" alt="IOS系统机型少、适配性高">
                        </div>
                        <div class="softapp-wrap-card__cont">
                            <h5>IOS系统机型少、适配性高</h5>
                            <p>IOS机型少，所以IOS开发的适配性很高，IOS开发商可以针对性的进行APP开发，很少会出现机型不配的问题。</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="softapp-wrap-card">
                        <div class="softapp-wrap-card__img">
                            <img src="{{asset('index/images/softcreat/app/uIOS_img3.png')}}" alt="IOS应用发布统一且唯一">
                        </div>
                        <div class="softapp-wrap-card__cont">
                            <h5>IOS应用发布统一且唯一</h5>
                            <p>IOS系统只有一个APP
                                Store官方商店，而Android系统有很多应用商店，所以企业选择在IOS系统上发布APP，不仅提升了APP应用软件的安全，也减少了在多平台上的维护费用。</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 安卓APP开发优势 -->
    <section class="softapp-wrap main-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">安卓APP开发优势</h2>
                </div>
                <div class="w-100"></div>
                <div class="col-12 col-md-4">
                    <div class="softapp-wrap-card">
                        <div class="softapp-wrap-card__img">
                            <img src="{{asset('index/images/softcreat/app/uAndroid_img1.png')}}" alt="Android系统用户数量多">
                        </div>
                        <div class="softapp-wrap-card__cont">
                            <h5>Android系统用户数量多</h5>
                            <p>
                                截止到2017年2月，安卓系统在国内市场占有率达到86%，每5部手机中大约有4部安装了安卓系统。而使用安卓系统的华为、小米等国内品牌，也深受欢迎，安卓APP应用市场有更好的发展前景。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="softapp-wrap-card">
                        <div class="softapp-wrap-card__img">
                            <img src="{{asset('index/images/softcreat/app/uAndroid_img2.png')}}" alt="Android系统开放性高">
                        </div>
                        <div class="softapp-wrap-card__cont">
                            <h5>Android系统开放性高</h5>
                            <p>安卓系统开放性高，显著的开放性使得其拥有更多的开发者，而且安卓APP开发难度相对于IOS开发难度要小，有利于Android系统人气的积累。</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="softapp-wrap-card">
                        <div class="softapp-wrap-card__img">
                            <img src="{{asset('index/images/softcreat/app/uAndroid_img3.png')}}" alt="Android硬件条件丰富">
                        </div>
                        <div class="softapp-wrap-card__cont">
                            <h5>Android硬件条件丰富</h5>
                            <p>Android硬件条件丰富源和安卓系统开放性相关，众多厂商会推出功能各异的多种产品，功能上的差异和特色，不会影响到数据同步、设置软件的兼容。</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- APP开发常见问题 -->
    <section class="softapp-wrap main-wrap">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">APP开发常见问题</h2>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="softapp-wrap-item">
                                <div class="softapp-wrap-item__time">1</div>
                                <h5>IOS APP开发一般用什么编程语言?</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="softapp-wrap-item">
                                <div class="softapp-wrap-item__time">2</div>
                                <h5>IOS开发一定要MAC苹果电脑吗</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="softapp-wrap-item">
                                <div class="softapp-wrap-item__time">3</div>
                                <h5>IOS个人/企业开发者账号怎么申请？</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="softapp-wrap-item">
                                <div class="softapp-wrap-item__time">4</div>
                                <h5>企业如何选择靠谱的APP外包公司？</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="softapp-wrap-item">
                                <div class="softapp-wrap-item__time">5</div>
                                <h5>APP开发外包公司有什么优势？</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="softapp-wrap-item">
                                <div class="softapp-wrap-item__time">6</div>
                                <h5>开发一款APP究竟需要多少钱？</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="softapp-wrap-item">
                                <div class="softapp-wrap-item__time">7</div>
                                <h5>Mac OS上IOS开发环境如何搭建？</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="softapp-wrap-item">
                                <div class="softapp-wrap-item__time">8</div>
                                <h5>IOS开发者账号（个人、公司、企业）之间有什么区别？</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="softapp-wrap-item">
                                <div class="softapp-wrap-item__time">9</div>
                                <h5>史上最全的ios app开发者账号问题汇总</h5>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="softapp-wrap-item">
                                <div class="softapp-wrap-item__time">10</div>
                                <h5>APP开发公司开发一个APP的成本是多少</h5>
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
    <script src="index/js/lib/jquery-1.9.0.min.js"></script>
    <script src="index/js/lib/bootstrap.min.js"></script>
    <script src="index/js/config.js"></script>
@endsection
