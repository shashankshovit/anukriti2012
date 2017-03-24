<script language="javascript" src="TextTween.js"> </script>
<script language="javascript" src="jq.js"> </script>
<script language="javascript" src="jqc.js"> </script>
<script language="javascript" src="jqe.js"> </script>
<script language="javascript" src="jqm.js"> </script>
<script language="javascript" src="jqm1.js"> </script>
<script language="javascript" src="jqt.js"> </script>
<script language="javascript" src="Tween.js"> </script>
<script>
	anukriti='ANUKRITI: A State Level 3 Day Literal-Cultural annual Festival of University College of Engineering, RTU Kota. An Initiative to provide a platform showcasing Young, Energetic, Passionate talents towards Cultural spirits along with technical zeal. An Event to make students enjoy with passion shedding away the burden of whole rigorous year. A bridge connecting each student of the college with one another.';
	literary='LITERARY : ';
	artilary='ARTILARY : ';
	cultural='CULTURAL : ';
	sizzlers='SIZZLERS : ';
	fshow='F-SHOW : ';
	youthrun='YOUTH RUN : UCE is proud to introduce Youth Marathon for a cause “Green Kota Clean Kota” on 6th April. The Track of Youth Run is 7.5 kms starting from Dushera Maidan and ending at Dushera Maidan including Rangmanch and Sheila Chowdhary Road.';
	team='TEAM : ';
	rockband='ROCK BAND : The three day Literal-Cultural Festival of University College of Engineering will be inaugurated by the rocking performances of Rock Bands fighting with each other on theme i.e. “Rock on Bollywood”. The Winner Band may also get an opportunity to perform on the main cultural eve.';
	
</script>


<table width=80% align=center>
	<tr>
		<td width="30%">
			<table>
				<tr align="center">
					<td align="center">
						<input type="button" style="background-image:url(./images/img11.jpg);height:170;width:250;border:10 outset;" value="Literary"
						onClick="
						tweenTA2 = new Tween(new Object(),'xyz',Tween.bounceEaseOut,0,literary.length,15);
						var area2 = document.getElementById('area2');
						area2.value='';
						tweenTA2.onMotionChanged = function(event){
						area2.value = literary.substr(0,event.target._pos);
						};
						tweenTA2.start();">
					
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="button" value="Artilary" style="background-image:url(./images/img22.jpg);height:170;width:250;border:10 outset;" value=""
						onClick="
						tweenTA2 = new Tween(new Object(),'xyz',Tween.bounceEaseOut,0,artilary.length,15);
						var area2 = document.getElementById('area2');
						area2.value='';
						tweenTA2.onMotionChanged = function(event){
						area2.value = artilary.substr(0,event.target._pos);
						};
						tweenTA2.start();">
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="button" value="F-Show" style="background-image:url(./images/img55.jpg);height:170;width:250;border:10 outset;" value=""
						onClick="
						tweenTA2 = new Tween(new Object(),'xyz',Tween.bounceEaseOut,0,fshow.length,15);
						var area2 = document.getElementById('area2');
						area2.value='';
						tweenTA2.onMotionChanged = function(event){
						area2.value = fshow.substr(0,event.target._pos);
						};
						tweenTA2.start();">
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="button" value="Youth Run" style="background-image:url(./images/img66.jpg);height:170;width:250;border:10 outset;" value=""
						onClick="
						tweenTA2 = new Tween(new Object(),'xyz',Tween.bounceEaseOut,0,youthrun.length,15);
						var area2 = document.getElementById('area2');
						area2.value='';
						tweenTA2.onMotionChanged = function(event){
						area2.value = youthrun.substr(0,event.target._pos);
						};
						tweenTA2.start();">
					</td>
				</tr>
				
			</table>
			
		</td>
		
		
		<td width="40%">
			<table align="center">
				<tr>
					<td align="center">						
						<textarea id="area1" cols="46" rows="10" disabled style="background-image:url(./images/main.jpg);font-size:150%;font-family:'Lucida Handwriting';color:blue;"></textarea>		
					</td>
				</tr>
				<tr>
					<td align="center">
						<textarea id="area2" rows=10 cols=46 disabled style="background-image:url(./images/main.jpg);">Event Description : Click on event</textarea>
					</td>
				</tr>
				<tr>
					<td align=center>
<!--						<div align="center" id="image">
							<img src="./images/img1.jpg" id="im1" width="390" height="270" >
						</div>
	-->
						<?php include("slide.php"); ?>
					</td>
				</tr>
				<tr>
					<td align="center">
						<table width=100%><tr>	<td><img src='./images/prev.png' id="prev" height="70" onclick="backward()" width="70"></td>	<td width="80%"></td>	<td><img src="./images/next.png" onclick="forward()" id="next" height="70" width="70"></td>	</tr></table>
						<script>
							i=2;
							img=Array("img11.jpg","img22.jpg","img33.jpg","img44.jpg","img55.jpg","img66.jpg","img77.JPG","img88.JPG");
							function backward(){i--;if(i==-1) i=img.length-1; o=document.getElementById("im1"); o.src="./images/"+img[i];}
							function forward(){i++;if(i==img.length) i=0; o=document.getElementById("im1"); o.src="./images/"+img[i];}
						</script>
					</td>
				</tr>
				
				
			</table>
		</td>
		
		<td width="30%">
			<table>
				<tr>
					<td align="center">
						<input type="button" value="Cultural" style="background-image:url(./images/img33.jpg);height:170;width:250;border:10 outset;" value=""
						onClick="
						tweenTA2 = new Tween(new Object(),'xyz',Tween.bounceEaseOut,0,cultural.length,15);
						var area2 = document.getElementById('area2');
						area2.value='';
						tweenTA2.onMotionChanged = function(event){
						area2.value = cultural.substr(0,event.target._pos);
						};
						tweenTA2.start();">
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="button" value="Sizzlers" style="background-image:url(./images/img44.jpg);height:170;width:250;border:10 outset;" value=""
						onClick="
						tweenTA2 = new Tween(new Object(),'xyz',Tween.bounceEaseOut,0,sizzlers.length,15);
						var area2 = document.getElementById('area2');
						area2.value='';
						tweenTA2.onMotionChanged = function(event){
						area2.value = sizzlers.substr(0,event.target._pos);
						};
						tweenTA2.start();">
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="button" value="Rock Band" style="background-image:url(./images/img77.jpg);height:170;width:250;border:10 outset;" value=""
						onClick="
						tweenTA2 = new Tween(new Object(),'xyz',Tween.bounceEaseOut,0,rockband.length,15);
						var area2 = document.getElementById('area2');
						area2.value='';
						tweenTA2.onMotionChanged = function(event){
						area2.value = rockband.substr(0,event.target._pos);
						};
						tweenTA2.start();">
					</td>
				</tr>
				<tr>
					<td align="center">
						<input type="button" value="Team" style="background-image:url(./images/img88.jpg);height:170;width:250;border:10 outset;" value=""
						onClick="
						tweenTA2 = new Tween(new Object(),'xyz',Tween.bounceEaseOut,0,team.length,15);
						var area2 = document.getElementById('area2');
						area2.value='';
						tweenTA2.onMotionChanged = function(event){
						area2.value = team.substr(0,event.target._pos);
						};
						tweenTA2.start();">
					</td>
				</tr>
				
			</table>
			
		</td>
		
	</tr>
</table>