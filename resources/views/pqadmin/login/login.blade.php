<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Kanrisha - A Premium HTML5 Responsive Admin Template</title>
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
	<!-- Flot -->
	<script src="js/Flot/jquery.flot.js"></script>
	<script src="js/Flot/jquery.flot.resize.js"></script>
	<script src="js/Flot/jquery.flot.pie.js"></script>
	<!-- DataTables -->
	<script src="js/DataTables/jquery.dataTables.min.js"></script>
	<!-- ColResizable -->
	<script src="js/ColResizable/colResizable-1.3.js"></script>
	<!-- jQuryUI -->
	<script src="js/jQueryUI/jquery-ui-1.8.21.min.js"></script>
	<!-- Uniform -->
	<script src="js/Uniform/jquery.uniform.js"></script>
	<!-- Tipsy -->
	<script src="js/Tipsy/jquery.tipsy.js"></script>
	<!-- Elastic -->
	<script src="js/Elastic/jquery.elastic.js"></script>
	<!-- ColorPicker -->
	<script src="js/ColorPicker/colorpicker.js"></script>
	<!-- SuperTextarea -->
	<script src="js/SuperTextarea/jquery.supertextarea.min.js"></script>
	<!-- UISpinner -->
	<script src="js/UISpinner/ui.spinner.js"></script>
	<!-- MaskedInput -->
	<script src="js/MaskedInput/jquery.maskedinput-1.3.js"></script>
	<!-- ClEditor -->
	<script src="js/ClEditor/jquery.cleditor.js"></script>
	<!-- Full Calendar -->
	<script src="js/FullCalendar/fullcalendar.js"></script>
	<!-- Color Box -->
	<script src="js/ColorBox/jquery.colorbox.js"></script>
	<!-- Kanrisha Script -->
	<script src="js/kanrisha.js"></script>
</head>
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
	<div class="top_panel">
		<div class="wrapper">
			<div class="user">
				<img src="images/user_avatar.png" alt="user_avatar" class="user_avatar">
				<span class="label"><a href="#">Sign Up</a></span>
			</div>
		</div>
	</div>

	<div class="wrapper contents_wrapper">
		
		<div class="login">
			<div class="widget_header">
				<h4 class="widget_header_title wwIcon i_16_login">Login</h4>
			</div>
			<div class="widget_contents lgNoPadding">
				<form action="passport" method="post">
					{{ csrf_field() }}
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">User</span></div>
					<div class="g_10 g_10M">
						<input class="simple_field tooltip" title="Your Username" name="username" type="text" placeholder="Username"></div>
					<div class="clear"></div>
				</div>
				<div class="line_grid">
					<div class="g_2 g_2M"><span class="label">Pass</span></div>
					<div class="g_10 g_10M">
						<input class="simple_field tooltip" title="Your Password" name="password" type="password" >
					</div>
					<div class="clear"></div>
				</div>
				<div class="line_grid">
					<div class="g_6"><input class="submitIt simple_buttons" value="Log In" type="submit">
					</div>
					<div class="clear"></div>
				</div>
				</form>
			</div>
		</div>

	</div>
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='js' charset='gb2312'></script></div>
</body>
</html>