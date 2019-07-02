$(function () {

    var swiperH = new Swiper('.swiper-container-v', {
        direction: 'vertical',
        slidesPerView: 'auto',
        spaceBetween: 10,
        grabCursor: true,
        autoHeight: true,
        navigation: {
            nextEl: '.swiper-button-next-v',
            prevEl: '.swiper-button-prev-v',
        }
    });

    $(".swiper-slide .case-info-card").click(function (e) { 
        e.preventDefault();
        $('.swiper-slide .case-info-card').removeClass("active")
        $(this).addClass('active')
        console.log($(this).data('id'))
        // TODO 这里写点击左边导航事件跳转

    });
});
