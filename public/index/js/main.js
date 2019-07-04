//滚动检测
let t1 = 0;
let timer = null; // 定时器
window.isScrollEnd = function (t2) {
    if (t1 == t2) {
        $(".main-header").css({
            "display": "none"
        });
    } else {
        $(".main-header").css({
            "display": "block"
        });

    }
};
$(function () {
    $(".main-header").hover(function () {
        // over
        $(".main-header").css({
            "display": "block"
        });
        clearInterval(timer);
    }, function () {
        // out
        if (t1 > 0) {
            window.setTimeout("isScrollEnd(" + t1 + ")", 4000)
        }
    });

    var swiperH = new Swiper('.swiper-container-h', {
        spaceBetween: 0,
        resistanceRatio: false,
        pagination: {
            el: '.swiper-pagination-h',
            clickable: true,
        },
        grabCursor: true,
        navigation: {
            nextEl: '.swiper-button-next-h',
            prevEl: '.swiper-button-prev-h',
        },
    });

    var swiperNews = new Swiper('.swiper-container-news', {
        spaceBetween: 10,
        pagination: {
            el: '.swiper-pagination-news',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next-news',
            prevEl: '.swiper-button-prev-news',
        },
    });

    $('#industry-trends-tab').click(function (e) {
        e.preventDefault();
        setTimeout(() => {
            var swiperIndustry = new Swiper('.swiper-container-industry', {
                spaceBetween: 10,
                pagination: {
                    el: '.swiper-pagination-industry',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next-industry',
                    prevEl: '.swiper-button-prev-industry',
                },
            })
        }, 600);
    });


    if (!mobilecheck()) {
        console.log('pc');
        var swiperV = new Swiper('.swiper-container-v', {
            direction: 'vertical',
            slidesPerView: 'auto',
            spaceBetween: 10,
            mousewheel: true,
            simulateTouch: false,
            pagination: {
                el: '.swiper-pagination-v',
                clickable: true,
            },
            on: {
                scroll: function () {
                    $(".main-header").css({
                        "display": "block"
                    });
                    clearInterval(timer);
                    t1 = this.activeIndex;
                    if (t1 > 0) {
                        timer = window.setTimeout("isScrollEnd(" + t1 + ")", 4000)
                    }
                },
                init: function () {
                    swiperAnimateCache(this); //隐藏动画元素 
                    this.emit('slideChangeTransitionEnd'); //在初始化时触发一次slideChangeTransitionEnd事件
                },
                slideChangeTransitionEnd: function () {
                    swiperAnimate(this); //每个slide切换结束时运行当前slide动画
                    this.slides.eq(this.activeIndex).find('.ani').removeClass('ani'); //动画只展示一次
                }
            }
        });
    } else {
        console.log('wap');
        var swiperV = new Swiper('.swiper-container-v', {
            direction: 'vertical',
            slidesPerView: 'auto',
            spaceBetween: 0,
            autoHeight: true,
            pagination: {
                el: '.swiper-pagination-v',
                clickable: true,
            },
            freeMode: true
        });
        var ts = undefined,
            dir = undefined;
        var onTouchStart = function (evt) {
            ts = evt.originalEvent.touches[0].clientY;
        };
        var onTouchMove = function (evt) {
            var te = evt.originalEvent.changedTouches[0].clientY;
            if (ts > te) {
                dir = 'slidedown';
            }
            else if (ts < te) {
                dir = 'slideup';
            }
            // check scroll
            var $slide = $(this),
                slideHeight = $slide.height(),
                slideScrollHeight = $slide[0].scrollHeight;
            if (slideHeight !== slideScrollHeight) {
                // slide has content overflow
                var scrollTop = $slide.scrollTop();
                if (scrollTop > 0 && (scrollTop + slideHeight) < slideScrollHeight // scrolling the content
                    || (scrollTop == 0 && dir == 'slidedown')   // moving from top edge
                    || ((scrollTop + slideHeight) == slideScrollHeight && dir == 'slideup')) { // moving from bottom edge
                    evt.stopPropagation();
                }
            }
        };

        $('.swiper-container').on('touchstart', onTouchStart);
        $('.swiper-slide').on('touchmove', onTouchMove);
    }

    $("#sTop").click(function (e) {
        e.preventDefault();
        swiperV.slideTo(0, 1000, false);
        $(".main-header").css({
            "display": "block"
        });
    });
});
