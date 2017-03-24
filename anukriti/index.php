<html>

	<head>	
		<title>ANUKRITI 2012</title>
	
	
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="keywords" content="slideman, sliderman.js, javascript slider, jquery, slideshow, effects" />
	<meta name="description" content="Sliderman.js - will do all the sliding for you :)" />
	<style type="text/css">
		<!--* { margin: 0; outline: none; }-->
		<!--body { background-color: #444444; }-->
		<!--.c { clear: both; }-->
		<!--#wrapper { margin: 0 auto; padding: 0 40px 60px 40px; width:; }-->
		<!--#wrapper {margin: 0 auto; padding: 20px ; width:;}-->
		<!--h2 { padding: 20px 0 10px 0; font-size: 24px; line-height: 40px; font-weight: normal; color: #adc276; text-shadow: 0 1px 3px #222222; }-->
	</style>

	<!-- sliderman.js -->
	<script type="text/javascript" src="js/sliderman.1.3.6.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sliderman.css" />
	<!-- /sliderman.js -->

	
		<script language="javascript" src="jscript.js"></script>
		<style>
		td{color:#000000;}
		a{color:#ffffff;border-width:0;}
		.t{background-image:url('./images/back.png');height:200;width:300;}
		</style>
		<script>
			anukriti='ANUKRITI: A State Level 3 Day Literal-Cultural annual Festival of University College of Engineering, RTU Kota. An Initiative to provide a platform showcasing Young, Energetic, Passionate talents towards Cultural spirits along with technical zeal. An Event to make students enjoy with passion shedding away the burden of whole rigorous year. A bridge connecting each student of the college with one another.';
		</script>
		<script>
			imgg=Array{"img11.jpg","img22.jpg","img33.jpg"};
			i=0;
			function imagescroll(s)
			{	
				alert(s);
				i++;
				if(i>=imgg.length || i<=0)
					i=0;
				
			document.getElementById("im1").src="./images/"+imgg[i];
			//obj.src="./images/"+img[i];			
				setTimeout('imagescroll()',1000);
		
			}
			
		</script>
	</head>

	<body background="./images/main.jpg" onload="
						tweenTA2 = new Tween(new Object(),'xyz',Tween.bounceEaseOut,0,anukriti.length,20);
						var area1 = document.getElementById('area1');
						area1.value='';
						tweenTA2.onMotionChanged = function(event){
						area1.value = anukriti.substr(0,event.target._pos);
						};
						tweenTA2.start();imagescroll();"
	
	>
<!--	<body onload='imagescroll("hello")'>-->
		<table width="90%" align="center">
			<tr align="center">
				<td><?php include("head.php") ?></td>
			</tr>
			
			<tr align="center">
				<td><?php include("links.php") ?></td>
			</tr>

			<tr>
				<td><?php include("body.php") ?></td>
			</tr>

			<tr>
				<td><?php include("foot.php") ?></td>
			</tr>	
		
		</table>
	</body>
</html>

