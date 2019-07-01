{{-- 继承布局 --}}
@extends('index.public.layout')

{{-- CSS --}}
@section('css')
    <link rel="stylesheet" href="{{asset('index/css/bootstrap-reboot.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/swiper.min.css')}}">
    <link rel="stylesheet" href="{{asset('index/css/news.css')}}">
@endsection

{{-- Content --}}
@section('content')
<!-- 主体 -->
<main class="main-body container">
    <!-- 企业动态 -->
    <section class="row">
      <div class="main-subtitle">
        <a href="/" class="active">首页</a>
        <a href="#">企业动态</a>
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
                  <div class="swiper-entreprice-title">这是新闻标题：论百万级服务器反入侵场景的混沌工程实践</div>
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
              <a href="/#">
                <img src="./images/news/img3.png" alt="" class="news-item-pic">
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
            <!-- 如果需要导航按钮 -->
            <div class="swiper-button-prev swiper-newslist-button-prev d-none d-sm-block"></div>
            <div class="swiper-button-next swiper-newslist-button-next d-none d-sm-block"></div>
          </div>
        </div>
      </div>
    </section>
    <!-- 行业新闻 -->
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
            <!-- 分页 -->
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
    <!-- 最新案例 -->
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

  <!-- footer -->
  <footer class="main-footer">
    <div class="main-view">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-4 col-12 pb-3">
            <div class="footer-box">
              <div class="footer-title">
                <h5>解决方案</h5>
                <a href="#">更多+</a>
              </div>
              <div class="footer-list">
                <a href="">企业网站建设解决方案</a>
                <a href="">移动电商行业解决方案</a>
                <a href="">数字金融行业解决方案</a>
                <a href="">网络营销行业解决方案</a>
                <a href="">智能硬件行业解决方案</a>
                <a href="">医疗行业解决方案</a>
                <a href="">教学行业解决方案</a>
                <a href="">建筑装饰行业解决方案</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-12 pb-3">
            <div class="footer-box">
              <div class="footer-title">
                <h5>我们的服务</h5>
                <a href="#">更多+</a>
              </div>
              <p class="footer-text">
                <strong>网站建设</strong>
                <strong>网站外包</strong>
                <strong>网站设计</strong>
                <strong>软件定制</strong>
                <strong>微信服务</strong>
                <strong>企业官网建设</strong>
                <strong>商城网站建设</strong>
                <strong>系统平台开发</strong>
                <strong>门户网站</strong>
                <strong>手机网站</strong>
                <strong>快速建站</strong>
                <strong>PHP二次开发</strong>
                <strong>微信公众号</strong>
                <strong>微信小程序</strong>
                <strong>微官网</strong>
                <strong>微商城</strong>
                <strong>微服务</strong>
                <strong>WEBAPP</strong>
                <strong>软件界面设计</strong>
                <strong>SEO优化</strong>
                <strong>关键字排名</strong>
                <strong>快速上首页</strong>
                <strong>搜索引擎优化</strong>
                <strong>整站优化</strong>
                <strong>问题解答</strong>
                <strong>使用教学</strong>
                <strong>免费维护一年</strong>
              </p>
            </div>
          </div>
          <div class="col-sm-4 col-12 pb-3">
            <div class="footer-box">
              <div class="footer-title">
                <h5>关于我们</h5>
                <a href="#">更多+</a>
              </div>
              <p class="footer-text">
                普擎网站设计，为客户量身定制各类网站建设业务，包括企业型、电子商务型、行业门户型、品牌建立型等各类网站，实战经验丰富，成功案例众多。以客户利益为出发点，普擎网站制作为客户规划、定制符合企业需求、带有营销价值的网络建站方案，提供从网站前期定位分析策划、技术架构，到网站界面设计...
              </p>
            </div>
          </div>
        </div>
        <div class="footer-link">
          <h5>友情链接</h5>
          <div class="link-list">
            <a href="">重庆普擎科技</a>
            <a href="">重庆网站设计</a>
            <a href="">重庆网站建设</a>
          </div>
        </div>
        <p class="footer-text">重庆普擎科技官网©2019 重庆市普擎科技有限公司 版权所有 | 渝ICP备19004069号</p>
      </div>
    </div>
  </footer>
@endsection

{{-- js --}}
@section('js')
    <script src="{{asset('index/js/lib/jquery-1.9.0.min.js')}}"></script>
    <script src="{{asset('index/js/lib/bootstrap.min.js')}}"></script>
    <script src="{{asset('index/js/lib/swiper.min.js')}}"></script>
    <script src="{{asset('index/js/config.js')}}"></script>
    <script src="{{asset('index/js/news.js')}}"></script>
@endsection
