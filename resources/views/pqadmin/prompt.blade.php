<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>普擎科技-提示</title>
	<!--[if lt IE 9]>
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="js/Flot/excanvas.js"></script>
	<![endif]-->
	<!-- The Fonts -->

	<!-- The Main css File -->
	<link rel="stylesheet" href="css/style.css">
	<!-- jQuery -->
	<script src="js/jQuery/jquery-1.7.2.min.js"></script>
</head>
<style>
.g_2{
 width:100%;
}
a{
    color:#000000
}
</style>
<body>
	<!-- Change Pattern -->
	<div class="changePattern">
		<span id="pattern1"></span>
		<span id="pattern2"></span>
		<span id="pattern3"></span>
		<span id="pattern4"></span>
		<span id="pattern5"></span>
		<span id="pattern6"></span>
	</div>
	<!-- Top Panel -->

	<div class="wrapper contents_wrapper">
    @if ($data['status']=='error')
		<div class="login">
			<div class="widget_header">
				<h4 class="widget_header_title wwIcon ">错误</h4>
			</div>
			<div class="widget_contents lgNoPadding">
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">{{$data['message']}}</span></div>
					<div class="clear"></div>
				</div>
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">浏览器页面将在<b id="loginTime_error">{{ $data['jumpTime'] }}</b>秒后跳转......<a href="javascript:void(0);" class="jump_now">立即跳转</a></span></div>
					<div class="clear"></div>
				</div>
				
			</div>
		</div>
    @endif
    @if ($data['status']=='continue')
        <div class="login">
            <div class="widget_header">
                <h4 class="widget_header_title wwIcon ">未完成,继续</h4>
            </div>
            <div class="widget_contents lgNoPadding">
                <div class="line_grid">
                    <div class="g_2 g_2M"><span class="label">{{$data['message']}}</span></div>
                    <div class="clear"></div>
                </div>
                <div class="line_grid">
                    <div class="g_2 g_2M"><span class="label">浏览器页面将在<b id="loginTime_continue">{{ $data['jumpTime'] }}</b>秒后跳转......<a href="javascript:void(0);" class="jump_now">立即跳转</a></span></div>
                    <div class="clear"></div>
                </div>
                
            </div>
        </div>
    @endif
    @if ($data['status']=='warning')
        <div class="login">
            <div class="widget_header">
                <h4 class="widget_header_title wwIcon ">警告</h4>
            </div>
            <div class="widget_contents lgNoPadding">
                <div class="line_grid">
                    <div class="g_2 g_2M"><span class="label">{{$data['message']}}</span></div>
                    <div class="clear"></div>
                </div>
                <div class="line_grid">
                    <div class="g_2 g_2M"><span class="label">浏览器页面将在<b id="loginTime_warning">{{ $data['jumpTime'] }}</b>秒后跳转......<a href="javascript:void(0);" class="jump_now">立即跳转</a></span></div>
                    <div class="clear"></div>
                </div>
                
            </div>
        </div>
    @endif
    @if ($data['status']=='success')
        <div class="login">
            <div class="widget_header">
                <h4 class="widget_header_title wwIcon ">成功</h4>
            </div>
            <div class="widget_contents lgNoPadding">
                <div class="line_grid">
                    <div class="g_2 g_2M"><span class="label">{{$data['message']}}</span></div>
                    <div class="clear"></div>
                </div>
                <div class="line_grid">
                    <div class="g_2 g_2M"><span class="label">浏览器页面将在<b id="loginTime_success">{{ $data['jumpTime'] }}</b>秒后跳转......<a href="javascript:void(0);" class="jump_now">立即跳转</a></span></div>
                    <div class="clear"></div>
                </div>
                
            </div>
        </div>
    @endif
	</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='js' charset='gb2312'></script></div>
</body>
</html>
<script type="text/javascript">
    $(function(){
        //循环倒计时，并跳转
        var url = "{{ $data['url'] }}";
        var loginTimeID='loginTime_'+'{{$data['status']}}';
        console.log('{{$data['status']}}');
        console.log(url);
        //alert(loginTimeID);return;
        var loginTime = parseInt($('#'+loginTimeID).text());
        console.log($('#'+loginTimeID));
        var time = setInterval(function(){
            loginTime = loginTime-1;
            $('#'+loginTimeID).text(loginTime);
            if(loginTime==0){
                clearInterval(time);
                window.location.href=url;
            }
        },1000);
    });
    //点击跳转
    $('.jump_now').click(function () {
        var url = "{{ $data['url'] }}";
        window.location.href=url;
    });
</script>