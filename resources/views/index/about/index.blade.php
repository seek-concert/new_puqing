{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
  <link rel="stylesheet" href="index/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="index/css/bootstrap.min.css">
  <link rel="stylesheet" href="index/css/abouts.css">
@endsection

{{-- Content --}}
@section('content')
{{-- 主体 --}}
{{-- banner --}}
<section class="about-banner"></section>
  {{-- tabs --}}
  <section class="about-tabs">
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a class="nav-link active" id="pills-company-tab" data-toggle="pill" href="#pills-company" role="tab"
          aria-controls="pills-company" aria-selected="true">企业文化</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-team-tab" data-toggle="pill" href="#pills-team" role="tab"
          aria-controls="pills-team" aria-selected="false">团队介绍</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
          aria-controls="pills-contact" aria-selected="false">联系我们</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="pills-pay-tab" data-toggle="pill" href="#pills-pay" role="tab" aria-controls="pills-pay"
          aria-selected="false">付款方式</a>
      </li>
    </ul>
  </section>
  {{-- content --}}
  <section class="tab-content" id="pills-tabContent">
    {{-- 公司简介 --}}
    <div class="tab-pane fade show active about-company" id="pills-company" role="tabpanel"
      aria-labelledby="pills-company-tab">
      <div class="main-body container">
        <div class="about-title">
          <div class="text-ft-h1">公司简介</div>
          <div class="about-title-line"></div>
          <h5>company culture</h5>
        </div>
        <div class="row">
          <div class="col-md-6 col-12 about-company-bg"></div>
          <div class="col-md-6 col-12 about-company-content">
            <p>重庆普擎科技成立于2019年，由4位对生活的充满激情，对工作充满经验的年轻人创建。
              公司秉承着用最好的态度给客户最好的服务理念，将客户的问题作为自己的目标，把每一位客户心中所想的构架进行组建成他们心中最理想的大厦。</p>
            <p>我们拥有经验丰厚的网站视觉设计师，从业工作5年以上，经历过社会的毒打，成就了他今日打造视觉盛宴的资本。</p>
            <p>我们拥有优秀的网站开发团队，人均从业3年以上，他们分别从事过小程序开发、商城开发、定制专题网站开发、以及无数公司官网开发。他们确信着细节决定成败，因此会成为客户心中理想大厦的坚实地基。</p>
            <p>普擎科技，质量决定信誉。</p>
          </div>
        </div>
      </div>
    </div>
    {{-- 团队介绍 --}}
    <div class="tab-pane fade about-team" id="pills-team" role="tabpanel" aria-labelledby="pills-team-tab">
      <div class="main-body container">
        <div class="about-title">
          <div class="text-ft-h1">团队介绍</div>
          <div class="about-title-line"></div>
          <h5>company culture</h5>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-12">
            <div class="about-team-item">
              <div class="about-team-pic"><img src="{{asset('index/images/about/about-img1.png')}}" alt="普擎科技专注网站建设外包服务"></div>
              <h5>开发工程师</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="about-team-item">
              <div class="about-team-pic"><img src="{{asset('index/images/about/about-img2.png')}}" alt="普擎科技专注网站建设外包服务"></div>
              <h5>UI设计师</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="about-team-item">
              <div class="about-team-pic"><img src="{{asset('index/images/about/about-img3.png')}}" alt="普擎科技专注网站建设外包服务"></div>
              <h5>运维工程师</h5>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-12">
            <div class="about-team-item">
              <div class="about-team-pic"><img src="{{asset('index/images/about/about-img4.png')}}" alt="普擎科技专注网站建设外包服务"></div>
              <h5>SEO优化工程师</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- 联系我们 --}}
    <div class="tab-pane fade about-contact" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      <div class="main-body container">
        <div class="about-title">
          <div class="text-ft-h1">联系我们</div>
          <div class="about-title-line"></div>
          <h5>company culture</h5>
        </div>
        <div class="row">
          <div class="col-md-6 col-12 about-contact-map" id="container"></div>
          <div class="col-md-6 col-12">
            <div class="about-contact-items">
              <div class="about-contact-item">
                <div class="about-contact-icon iconfont b-org">&#xe613;</div>
                <div class="about-contact-content">
                  <h4>公司地址</h4>
                  <p>重庆市渝北区仙桃街道数据谷中路107号</p>
                </div>
              </div>
              <div class="about-contact-item">
                <div class="about-contact-icon iconfont b-blue">&#xe700;</div>
                <div class="about-contact-content">
                  <h4>电话咨询</h4>
                  <p>售前&nbsp;&nbsp;&nbsp;&nbsp;15330360382 <br> 售后&nbsp;&nbsp;&nbsp;&nbsp;15923774622</p>
                </div>
              </div>
              <div class="about-contact-item">
                <div class="about-contact-icon iconfont b-gre">&#xe8ee;</div>
                <div class="about-contact-content">
                  <h4>公司邮箱</h4>
                  <p>leimon@p7ing.com</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- 付款方式 --}}
    <div class="tab-pane fade about-pay" id="pills-pay" role="tabpanel" aria-labelledby="pills-pay-tab">
      <div class="main-body container">
        <div class="about-title">
          <div class="text-ft-h1">付款方式</div>
          <div class="about-title-line"></div>
          <h5>company culture</h5>
        </div>
        <div class="row justify-content-center">
          <div class="col-12 col-md-11 col-lg-11 col-xl-9">
            <div class="about-pay-box row">
              <div class="col-lg-4 col-md-12 col-12 about-pay-pic"><img src="{{asset('index/images/about/icbc.png')}}" alt="普擎科技专注网站建设外包服务"></div>
              <div class="col-lg-8 col-md-12 col-12">
                <div class="about-pay-text"><span class="label">公司名称</span>：<span>重庆市普擎科技有限公司</span></div>
                <div class="about-pay-text"><span class="label">开 户 行</span>：<span>渝北龙溪支行</span></div>
                <div class="about-pay-text"><span class="label">账 号</span>：<span>3100******9275</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- 联系我们 --}}
    @include('index.public.contact_us')
  {{-- footer --}}
    @include('index.public.footer')
  {{-- footer end --}}
@endsection

{{-- js --}}
@section('js')
  <script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.8&key=3ab0c84c60c3122b58506f611315ac24">
  </script>
  <script src="index/js/about.js"></script>
@endsection
