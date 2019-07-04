$(function () {
  var map = new AMap.Map('container', {
    zoom: 13, //级别
    center: [106.554460, 29.738249],//中心点坐标
    viewMode: '3D'//使用3D视图
  });
  // 同时引入工具条插件，比例尺插件和鹰眼插件
  AMap.plugin([
    'AMap.ToolBar',
    'AMap.Scale',
    'AMap.OverView',
    'AMap.MapType',
  ], function () {
    // 在图面添加工具条控件，工具条控件集成了缩放、平移、定位等功能按钮在内的组合控件
    map.addControl(new AMap.ToolBar());

    // 在图面添加比例尺控件，展示地图在当前层级和纬度下的比例尺
    map.addControl(new AMap.Scale());

    // 在图面添加鹰眼控件，在地图右下角显示地图的缩略图
    map.addControl(new AMap.OverView({ isOpen: true }));

    // 在图面添加类别切换控件，实现默认图层与卫星图、实施交通图层之间切换的控制
    map.addControl(new AMap.MapType());

  });
  // 创建一个 Marker 实例：
  
  var marker = new AMap.Marker({
    position: map.getCenter(),
    // position: new AMap.LngLat(106.554460, 29.738249),   // 经纬度对象，也可以是经纬度构成的一维数组[116.39, 39.9]
    title: '重庆市普擎科技有限公司',
    icon: '//a.amap.com/jsapi_demos/static/demo-center/icons/poi-marker-default.png',
    offset: new AMap.Pixel(-13, -30)
  });
  marker.setMap(map);
  // 设置鼠标划过点标记显示的文字提示
  marker.setTitle('重庆普擎科技有限公司');
  // 设置label标签
  // label默认蓝框白底左上角显示，样式className为：amap-marker-label
  marker.setLabel({
    offset: new AMap.Pixel(-60, -40),  //设置文本标注偏移量
    content: "<div class='map-logo'><img src='/index/images/logo.png'></div>", //设置文本标注内容
    direction: 'top' //设置文本标注方位
  });

  map.add(marker);
});