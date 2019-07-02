{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="{{asset('index/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/news.css')}}">
@endsection

{{-- Content --}}
@section('content')
{{-- 主体 --}}
<main class="main-body container">
    {{-- 企业动态 --}}
    <section class="row">
      <div class="main-subtitle">
        <a href="https://www.p7ing.com" class="active" title="普擎官网">首页</a>
        <a href="#" title="网站建设行业新闻">企业动态</a>
      </div>
    </section>
    <section class="row">
      <div class="news-title">
        <span class="news-title-num">01</span>
        <span class="news-title-line"></span>
        <span class="news-title-name">企业动态</span>
      </div>
      <div class="news-content">
        <div class="row pb-md-5 pd-3">
          <div class="col-md-6 col-12 border-md-right">
            <div class="swiper-container swiper-entreprice" id="swiperEntreprice">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="swiper-entreprice-img">
                    <img src="./images/news/slide1.png" alt="">
                  </div>
                  <div class="swiper-entreprice-title">这是新闻标题：论百万级服务器</div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-entreprice-img">
                    <img src="./images/news/slide1.png" alt="">
                  </div>
                  <div class="swiper-entreprice-title">这是新闻标题：论百万级服务器反入侵场景的混沌工程实践</div>
                </div>
                <div class="swiper-slide">
                  <div class="swiper-entreprice-img">
                    <img src="./images/news/slide1.png" alt="">
                  </div>
                  <div class="swiper-entreprice-title">这是新闻标题：论百万级服务器反入侵场景的混沌工程实践</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-12 news-items">
            <div class="news-item">
              <a href="{{url('news_info')}}">
                <img src="./images/news/img3.png" alt="" class="news-item-pic">
                <div class="news-item-content">
                  <h5 class="news-item-title">这是新闻标题：论百万级</h5>
                  <P class="news-item-info">
                    ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                  </P>
                </div>
              </a>
            </div>
            <div class="news-item">
              <a href="/#">
                <img src="./images/news/img2.png" alt="" class="news-item-pic">
                <div class="news-item-content">
                  <h5 class="news-item-title">这是新闻标题：论百万级服务器反入侵场...</h5>
                  <P class="news-item-info">
                    ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                  </P>
                </div>
              </a>
            </div>
            <div class="news-item">
              <a href="/#">
                <img src="./images/news/img1.png" alt="" class="news-item-pic">
                <div class="news-item-content">
                  <h5 class="news-item-title">这是新闻标题：论百万级服务器反入侵场...</h5>
                  <P class="news-item-info">
                    ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                  </P>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="swiper-container" id="swiperNewsList">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="news-items swiper-news-items">
                  <div class="news-item">
                    <a href="/#">
                      <img src="./images/news/img4.png" alt="" class="news-item-pic">
                      <div class="news-item-content">
                        <h5 class="news-item-title">这是新闻标题：论百万级服务器反入侵场...</h5>
                        <P class="news-item-info">
                          ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                        </P>
                        <div class="news-item-times">
                          <span class="iconfont">&#xe6e0;</span>
                          <span>2019/5/1</span>
                          <span class="iconfont text-success">&#xec1e;</span>
                          <span>龙华网</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="news-item">
                    <a href="/#">
                      <img src="./images/news/img4.png" alt="" class="news-item-pic">
                      <div class="news-item-content">
                        <h5 class="news-item-title">这是新闻标题：论百万级服务器反入侵场...</h5>
                        <P class="news-item-info">
                          ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                        </P>
                        <div class="news-item-times">
                          <span class="iconfont">&#xe6e0;</span>
                          <span>2019/5/1</span>
                          <span class="iconfont text-success">&#xec1e;</span>
                          <span>龙华网</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="news-item">
                    <a href="/#">
                      <img src="./images/news/img4.png" alt="" class="news-item-pic">
                      <div class="news-item-content">
                        <h5 class="news-item-title">这是新闻标题：论百万级服务器反入侵场...</h5>
                        <P class="news-item-info">
                          ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                        </P>
                        <div class="news-item-times">
                          <span class="iconfont">&#xe6e0;</span>
                          <span>2019/5/1</span>
                          <span class="iconfont text-success">&#xec1e;</span>
                          <span>龙华网</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="news-items swiper-news-items">
                  <div class="news-item">
                    <a href="/#">
                      <img src="./images/news/img4.png" alt="" class="news-item-pic">
                      <div class="news-item-content">
                        <h5 class="news-item-title">这是新闻标题：论百万级服务器反入侵场...</h5>
                        <P class="news-item-info">
                          ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                        </P>
                        <div class="news-item-times">
                          <span class="iconfont">&#xe6e0;</span>
                          <span>2019/5/1</span>
                          <span class="iconfont text-success">&#xec1e;</span>
                          <span>龙华网</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="news-item">
                    <a href="/#">
                      <img src="./images/news/img4.png" alt="" class="news-item-pic">
                      <div class="news-item-content">
                        <h5 class="news-item-title">这是新闻标题：论百万级服务器反入侵场...</h5>
                        <P class="news-item-info">
                          ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                        </P>
                        <div class="news-item-times">
                          <span class="iconfont">&#xe6e0;</span>
                          <span>2019/5/1</span>
                          <span class="iconfont text-success">&#xec1e;</span>
                          <span>龙华网</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="news-item">
                    <a href="/#">
                      <img src="./images/news/img4.png" alt="" class="news-item-pic">
                      <div class="news-item-content">
                        <h5 class="news-item-title">这是新闻标题：论百万级服务器反入侵场...</h5>
                        <P class="news-item-info">
                          ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                        </P>
                        <div class="news-item-times">
                          <span class="iconfont">&#xe6e0;</span>
                          <span>2019/5/1</span>
                          <span class="iconfont text-success">&#xec1e;</span>
                          <span>龙华网</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="news-items swiper-news-items">
                  <div class="news-item">
                    <a href="/#">
                      <img src="./images/news/img4.png" alt="" class="news-item-pic">
                      <div class="news-item-content">
                        <h5 class="news-item-title">这是新闻标题：论百万级服务器反入侵场...</h5>
                        <P class="news-item-info">
                          ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                        </P>
                        <div class="news-item-times">
                          <span class="iconfont">&#xe6e0;</span>
                          <span>2019/5/1</span>
                          <span class="iconfont text-success">&#xec1e;</span>
                          <span>龙华网</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="news-item">
                    <a href="/#">
                      <img src="./images/news/img4.png" alt="" class="news-item-pic">
                      <div class="news-item-content">
                        <h5 class="news-item-title">这是新闻标题：论百万级服务器反入侵场...</h5>
                        <P class="news-item-info">
                          ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                        </P>
                        <div class="news-item-times">
                          <span class="iconfont">&#xe6e0;</span>
                          <span>2019/5/1</span>
                          <span class="iconfont text-success">&#xec1e;</span>
                          <span>龙华网</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            {{-- 如果需要导航按钮 --}}
            <div class="swiper-button-prev swiper-newslist-button-prev d-none d-sm-block"></div>
            <div class="swiper-button-next swiper-newslist-button-next d-none d-sm-block"></div>
          </div>
        </div>
      </div>
    </section>
    {{-- 行业新闻 --}}
    <section class="row">
      <div class="news-title">
        <span class="news-title-num">02</span>
        <span class="news-title-line"></span>
        <span class="news-title-name">行业新闻</span>
      </div>
      <div class="news-content">
        <div class="row">
          <div class="col-md-9 col-12 news-items news-industry-items border-md-right">
            <div class="news-item">
              <a href="/#">
                <img src="./images/news/img5.png" alt="" class="news-item-pic">
                <div class="news-item-content">
                  <h5 class="news-item-title">这是新闻标题：论百万级服务器反入侵场...</h5>
                  <div class="news-item-times">
                    <span>2019/5/1</span>
                    <span class="iconfont text-success">&#xec1e;</span>
                    <span>龙华网</span>
                  </div>
                  <P class="news-item-info">
                    ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                  </P>
                  <span class="news-item-more"><em class="iconfont">&#xe636;</em> 更多</span>
                </div>
              </a>
            </div>
            <div class="news-item">
              <a href="/#">
                <img src="./images/news/img6.png" alt="" class="news-item-pic">
                <div class="news-item-content">
                  <h5 class="news-item-title">这是新闻标题：论百万级服务器反入侵场...</h5>
                  <div class="news-item-times">
                    <span>2019/5/1</span>
                    <span class="iconfont text-success">&#xec1e;</span>
                    <span>龙华网</span>
                  </div>
                  <P class="news-item-info">
                    ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                  </P>
                  <span class="news-item-more"><em class="iconfont">&#xe636;</em> 更多</span>
                </div>
              </a>
            </div>
            <div class="news-item">
              <a href="/#">
                <img src="./images/news/img7.png" alt="" class="news-item-pic">
                <div class="news-item-content">
                  <h5 class="news-item-title">这是新闻标题：论百万级服务器反入侵场...</h5>
                  <div class="news-item-times">
                    <span>2019/5/1</span>
                    <span class="iconfont text-success">&#xec1e;</span>
                    <span>龙华网</span>
                  </div>
                  <P class="news-item-info">
                    ​首先我们讲新的网站如何被收录。我们刚注册了一个域名。一个网站从来没有被搜索引擎抓取到。显然这个网站肯定不会被收录，新的网站被搜索引擎收录，短的需要2~3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是3天，长的需要大概15天或者是长的需要大概15天或者是长的需要大概15天或者是
                  </P>
                  <span class="news-item-more"><em class="iconfont">&#xe636;</em> 更多</span>
                </div>
              </a>
            </div>
            {{-- 分页 --}}
            <nav aria-label="navigation">
              <ul class="pagination justify-content-center pt-md-5 pt-3">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                    <span class="sr-only">Previous</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><span class="page-link">2</span></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                    <span class="sr-only">Next</span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <div class="col-md-3 d-none d-md-block news-aside">
            <div class="news-aside-tags">
              <h4 class="news-aside-title">标签</h4>
              <div class="news-aside-tags__list">
                <a href=""><strong>网站</strong></a>
                <a href=""><strong>安全</strong></a>
                <a href=""><strong>网站外包</strong></a>
                <a href=""><strong>网站外包2</strong></a>
                <a href=""><strong>网站外包22</strong></a>
                <a href=""><strong>网站外包222</strong></a>
                <a href=""><strong>网站外包2223</strong></a>
              </div>
            </div>
            <div class="news-aside-list">
              <h4 class="news-aside-title">热推新闻</h4>
              <ul class="news-aside-list__link">
                <li><a href="">
                    <h5>企业建设网站有什么好处和作用</h5>
                    <p>2019-06-03</p>
                  </a></li>
                <li><a href="">
                    <h5>企业建设网站有什么好处和作用</h5>
                    <p>2019-06-03</p>
                  </a></li>
                <li><a href="">
                    <h5>企业建设网站有什么好处和作用</h5>
                    <p>2019-06-03</p>
                  </a></li>
                <li><a href="">
                    <h5>企业建设网站有什么好处和作用</h5>
                    <p>2019-06-03</p>
                  </a></li>
              </ul>
            </div>
            <div class="news-aside-call">
              <h4 class="news-aside-title">咨询</h4>
              <p>电话：15330360382</p>
              <p>QQ：1105420247</p>
              <p>邮箱：leimon@p7ing.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- 最新案例 --}}
    <section class="row">
      <div class="news-title">
        <span class="news-title-name">最新案例</span>
      </div>
      <div class="news-content">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-12">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="./images/news/img10.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
          <div class="col-md-3 col-sm-6 col-12">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="./images/news/img11.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
          <div class="col-md-3 col-sm-6 col-12">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="./images/news/img12.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
          <div class="col-md-3 col-sm-6 col-12">
            <a href="#" class="card news-case">
              <img class="card-img-top" src="./images/news/img13.png" alt="">
              <div class="card-body">
                <h5 class="card-title text-center">深圳懮意科技有限公司</h5>
              </div>
            </a>

          </div>
        </div>
      </div>
    </section>
  </main>
{{-- footer --}}
  @include('index.public.footer')
{{-- footer end --}}
@endsection

{{-- js --}}
@section('js')
    <script src="{{asset('index/js/lib/swiper.min.js')}}"></script>
    <script src="{{asset('index/js/news.js')}}"></script>
@endsection
