<!DOCTYPE html>


<html lang="eng">
	<head>
		<meta charset="utf-8">
		
		<link rel="stylesheet" type="text/css" href="videos.css">

	<?php
		require('php_scripts/menu.php');

	?>
		
	
	<center>
	<div style="border:dashed; border-color:red; display:inline-block;">
	
		<ul>
			<center><li><button id="login_button" class="button" type="button" onclick="location.href='registration_form.html'">Register</button><button id="login_button" class="button" type="button" onclick="location.href='login_form.html'">Login</button></li></center>
			<center><li><button id="home_videos_button" class="button" type="button" onclick="open_videos('videos-container',this.id)" >Click me to display some awesome metal-videos!!</button></li></center>
		</ul>
	
	</div>
	</center>
	
	<!--THA FTIAKSOUME MIA GALLERY APO VIDEO-->
	
	<div id="videos-container">
		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/JFAcOnhcpGA" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/AY5LRReFYus" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/4tdKl-gTpZg" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/8X7vc0ChS_s" frameborder="0" allowfullscreen></iframe>
		</div>
	
		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/2G5rfPISIwo" frameborder="0" allowfullscreen></iframe>
		</div>

		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/B81K2qKF-1M" frameborder="0" allowfullscreen></iframe>
		</div>
	
		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/Mgou7flUKqE" frameborder="0" allowfullscreen></iframe>
		</div>
	
		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/xnu0pqMab9U" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/llOmqi6gKQo" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/a3JSbOt7CLo?list=RDa3JSbOt7CLo" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/nM__lPTWThU" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/vcf7DnHi54g" frameborder="0" allowfullscreen></iframe>
		</div>
		
		<div class="video">
			<iframe width="560" height="315" src="https://www.youtube.com/embed/n9AcG0glVu4" frameborder="0" allowfullscreen></iframe>
		</div>
		
		
	</div>
	
	
	
	</body>
	
	
</html>


<script>


	document.getElementById("home").className+= " active";


	function open_videos(div_id,button_id){
		x=document.getElementById(div_id).style;
		if(x.display=='none'||x.display==''){
			x.display="block";
		}
		else{
			x.display="none";
		}
		toggleText(button_id);
	}
	function toggleText(button_id) 
	{
		var el = document.getElementById(button_id);
		if (el.firstChild.data == "Click me to display some awesome metal-videos!!") 
		{
			el.firstChild.data = "Close Videos";
		}
		else 
		{
		el.firstChild.data ="Click me to display some awesome metal-videos!!";
		}
	}


</script>
	