var goToSwiperPage = new Function();
$(function () {
    if (!mobilecheck()) {
        console.log("pc")
        var swiperV = new Swiper('.swiper-container-v', {
            direction: 'vertical',
            slidesPerView: 'auto',
            spaceBetween: 0,
            mousewheel: true,
            simulateTouch: false,
            on: {
                init: function () {
                    swiperAnimateCache(this); //隐藏动画元素 
                    this.emit('slideChangeTransitionEnd'); //在初始化时触发一次slideChangeTransitionEnd事件
                },
                slideChangeTransitionEnd: function () {
                    swiperAnimate(this); //每个slide切换结束时运行当前slide动画
                    this.slides.eq(this.activeIndex).find('.ani').removeClass('ani'); //动画只展示一次
                },
                slideChange: function () {
                    goToSwiperPage(this.activeIndex)
                }
            }
        });

        goToSwiperPage = function (index) {
            $('.dual-left-item').eq(index).addClass("active").siblings().removeClass('active')
            swiperV.slideTo(index, 1000, true)
        }
        // 默认第一个
        goToSwiperPage(0)
    } else {
        console.log("wap")
        var swiperV = new Swiper('.swiper-container-v', {
            direction: 'vertical',
            slidesPerView: 'auto',
            spaceBetween: 0,
            autoHeight: true,
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
        swiperV.slideTo(0, 1000, false)
    });
});
