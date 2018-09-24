<!DOCTYPE html>


<html lang="eng">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="news.css">
		
		
		<?php
			require('php_scripts/menu.php');

		?>
	
	<center>
		<br>
		<br>
		<br>
		
		
		
		<h2 style="color:red"> TESTING THINGS!!!!!!!!!!!!!!!!!!!  </h2>
		
		
		<div id="form_div">
		<form action="php_scripts/process_comment.php" target="comment_frame" method="post">
			<p style="color:red">Name:<br></p>
			<input type="text" name="name"> <br>
			<p style="color:red">Comment:<br></p>
			<textarea id="textarea_comment" name="comment" placeholder="put your comment here..." rows="6" cols="50"></textarea><br>
			<button type="submit" onclick="eraseText()">clear</button>
			<input type="submit" onclick="hidden_message()" name="submit" value="submit your comment">
		</form>
			<div id="thanks_comment">
				<p>thanks for the comment!!</p>
			</div>
		</div>
		
		<div id="iframe_div">
		<iframe id="process_comment" name="comment_frame" src="php_scripts/process_comment.php"> </iframe>
		</div>
		
		
		
		
	</center>
	</body>
	
	<center>
	<img id="metal_png" onmouseleave="unfilling_color()" onmouseenter="filling_color()" src="images/no_fill.png" alt="metal">
	</center>
	
</html>

<script>

window.setInterval("reloadIFrame();", 20000);

document.getElementById("news").className+= " active";

function reloadIFrame() {
 //document.frames["comment_frame"].location.reload();
 iframe=document.getElementById('process_comment');
 iframe.src=iframe.src;
}

function eraseText(){
	document.getElementById("textarea_comment").value="";
	document.getElementById("thanks_comment").style.display="none";
}

function hidden_message(){
	document.getElementById("thanks_comment").style.display="block";
	
}

function filling_color(){
	image=document.getElementById("metal_png");
	image.src="images/fill.png"
}

function unfilling_color(){
	image=document.getElementById("metal_png");
	image.src="images/no_fill.png"
}
</script>