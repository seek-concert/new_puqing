$(function () {
  var typeList = $(".case-banner-content a");
  var queryType = Conf.getQueryString('type');

  console.log($(typeList).eq(0).children('p').text());
  console.log( $('.main-subtitle a:last-child').text());
  if(queryType == null){
    $('.main-subtitle a:last-child').text($(typeList).eq(0).children('p').text());
    $(typeList).eq(0).addClass('active').siblings().removeClass('active');
  }else{
    $('.main-subtitle a:last-child').text($(typeList).eq(queryType - 1).children('p').text());
    $(typeList).eq(queryType - 1).addClass('active').siblings().removeClass('active');
  }
  
});