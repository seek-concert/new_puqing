$(function () {
  
  // 企业动态大图
  var swiperEntreprice = new Swiper("#swiperEntreprice",{
    loop: true, // 循环模式选项
    grabCursor: true
  })

  // 企业动态左右切换
  var swiperNewsList = new Swiper("#swiperNewsList",{
    autoHeight: true,
    navigation: {
      nextEl: '.swiper-newslist-button-next',
      prevEl: '.swiper-newslist-button-prev',
    },

  })

});