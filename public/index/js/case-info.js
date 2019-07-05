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
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".swiper-slide .case-info-card").click(function (e) { 
        e.preventDefault();
        $('.swiper-slide .case-info-card').removeClass("active");
        $(this).addClass('active');
        console.log($(this).data('id'));
        // TODO 这里写点击左边导航事件跳转
        $.ajax({
            type:'post',
            data:{type_id:$(this).data('id')},
            url:'',
            dataType:'json',
            success:function (ret) {
                if(ret.code=='success'){
                    console.log(ret.data.infos);
                    $('.news-info-title').html(' ');
                    $('.news-info-desc p').html(' ');
                    $('.news-info-content').html(' ');
                    $('.news-info-title').html(ret.data.infos.title);
                    $('.news-info-desc p').html(ret.data.infos.description);
                    $('.news-info-content').html(ret.data.infos.content);
                }

            },
            error:function (e) {
                console.log(e);
            }
        });
        return false;
    });
});
