<html>
	<head>
		<script language="javascript" src="jq.js"></script>
		<script language="javascript" src="jqc.js"></script>
		<script language="javascript" src="jqe.js"></script>
		<script language="javascript" src="jqm.js"></script>
		<script language="javascript" src="jqm1.js"></script>
		<script language="javascript" src="jqt.js"></script>
		
		<script language="javascript" type="text/javascript">
			var i=1; var t;
			var img=Array("img11.jpg","img22.jpg"."img33.jpg","img44.jpg","img55.jpg");
			function scroll()
			{
				
				i++;
				if(i>=img.length){i=0;}
				document.getElementById("change").src="./images/"+img[i];
				t=setTimeout("scroll()",500);
			}
			function fade()
			{
				$('#im').fadeOut('600');
			}
			$('#im').fadeOut('600');
			
		</script>
		
	</head>
	<body onload=fade()>
		<img src="./images/img44.jpg" id="im" />
	</body>
</html>