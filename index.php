<!DOCTYPE html>
<html lang="en" ng-app>
<head>
	<meta charset="UTF-8">
	<link href="http://meyerweb.com/eric/tools/css/reset/reset.css" rel="stylesheet">

	<script src="http://code.angularjs.org/1.0.1/angular-1.0.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<title>Teste Responsivo</title>
	<style>
		#switcher {
			height: 50px;
			padding: 10px;
			background: #1d1e20;
			border-bottom: 1px solid #0f1011;
			z-index: 99999;
			position: fixed;
			width: 100%;
		}
		#iframe{
			/*position: absolute;*/
			margin: 0 auto;
			display: block;
			padding-top: 70px;
			-webkit-transition: 0.5s;
			-moz-transition: 0.5s;
			-o-transition: 0.5s;
			-ms-transition: 0.5s;
			transition: 0.5s;
		}
		.responsive {
			float: left; 
			margin-left: 14px;
			padding: 7px 0;
			margin-top: 3px;
		}

		.responsive a {
			opacity:0.5;
			float: left;
			margin: 0 6px;
		}
		p {
			font: 14px Verdana;
			float: right;
			color: #fff;
			margin: 6px 30px;
		}
		input{
			margin-left: 10px;
		}
		.responsive a.desktop { 
			background: url(devices.png) no-repeat 0 0; 
			width: 20px; 
			height: 19px; 
		}

		.responsive a.tabletlandscape { 
			background: url(devices.png) no-repeat -30px -3px; 
			width: 17px; 
			height: 14px; 
			margin-top: 2px;
		}

		.responsive a.tabletportrait { 
			background: url(devices.png) no-repeat -59px -1px; 
			width: 14px; 
			height: 17px;
			margin-top: 1px; 
		}

		.responsive a.mobilelandscape { 
			background: url(images/devices.png) no-repeat -87px -4px; 
			width: 14px; 
			height: 11px;
			margin-top: 5px; 
		}

		.responsive a.mobileportrait { 
			background: url(devices.png) no-repeat -117px -3px; 
			width: 11px; 
			height: 14px;
			margin-top: 3px; 
		}

		.responsive a.active, .responsive a:hover { 
			opacity:1; 
			color: #fff;
		}
		p a{
			color: #000;
			text-decoration: none;
			background: #fff;
			padding: 5px;
			display: block;
			opacity:1;
		}
		p a:hover{
			opacity:0.8;
		}
	</style>
	<script>
		$(function(){
			$(".desktop").on('click', function (){
				$('.responsive a').removeClass("active");
				$(this).addClass("active");
				$("#iframe").attr( "width", "100%" );
			});
			$(".tabletportrait").on('click', function (){
				$('.responsive a').removeClass("active");
				$(this).addClass("active");
				$("#iframe").attr( "width", "611px" );
			});
			$(".mobileportrait").on('click', function (){
				$('.responsive a').removeClass("active");
				$(this).addClass("active");
				$("#iframe").attr( "width", "380px" );
			});
		});
	</script>
</head>
<body style="margin:0px;padding:0px;overflow:hidden">
	<div id="switcher">
		<div class="responsive">
			<a href="#" class="desktop active" title="View Desktop Version"></a> 
			<a href="#" class="tabletportrait" title="View Tablet Portrait (768x1024)"></a> 
			<a href="#" class="mobileportrait" title="View Mobile Portrait (320x480)"></a>
		</div>
		<!-- <p>Testar Url<input type="text" ng-model="site"></p> -->
		<p><a href="public/">Ir para site &#9654;</a></p>
	</div>
     <iframe id="iframe" src="public/" frameborder="0" width="100%" height="800px">
     </iframe>
</body>
</html>