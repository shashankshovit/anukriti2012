<html>
	<head>
		<title>Anukriti'12 | Team</title>
		<style>td{color:#000000;}</style>
	</head>
	
	<body background="./images/team.jpg" onLoad="change()">
		<table align="center" width="90%">
			<tr>
				<td align="center"><?php include("head.php");?></td>
			</tr>
			
			<tr>
				<td align="center"><?php include("links.php");?></td>
			</tr>
			
			<tr>
				<td align="center">
					<div id="imag">
						<img src="./images/img22.jpg" id="image" />
					</div>
						<script language="javascript">
							
							i=0;
							function change()
							{
								imge=Array{"img11.jpg", "img22.jpg", "img33.jpg", "img44.jpg"};
								i++; if(i>imge.length) i=0;
								document.getElementById("image").src="./images/"+imge[i];
								setTimeout('change()',5);
							}
						</script>				
					
				</td>
			</tr>
			
			<tr>
				<td align="center"><?php include("foot1.php");?></td>
			</tr>
		</table>	
	</body>
</html>