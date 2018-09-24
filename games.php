<!DOCTYPE html>


<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="games.css">
		
		
	
	
	<!--<body onload="click_test()"> -->
	<?php
		require('php_scripts/menu.php');

	?>

	
	<h1> Under Construction </h1>
	
	<form action="php_scripts/insert_game.php" method="post" class="game_form" target="name_display_results">
		<div class="container">
			<h1>Insert Game</h1>
			<p>Please fill in this form to insert a new game.</p>
			<hr>
			<div>
				<label for="username_game"><b>Username:</b></label>
				<input type="text" name="username_game" maxlength="30" required>
			</div>

			<div>
				<label for="name"><b>Game:</b></label>
				<input type="text" name="name" maxlength="30" required>
			</div>

			<div>
				<label for="genre"><b>Genre:</b></label>
				<input type="text" name="genre" maxlength="30" required>
			</div>

			<div>
				<label for="price"><b>Price:</b></label>
				<input type="text" name="price" maxlength="7" required>
			</div>

			<div>
				<label for="kind"><b>Kind:</b></label>	
				<select name="kind" required>
					<option value="video game">video game</option>
					<option value="board game">board game</option>
				</select>
				</div>

			<div>
				<button id="button_insert_game" type="submit" onclick="display_insert_results(this.id)">Add the game</button>
			</div>
		</div>
	</form>
	
	<div id="id_display_results" class="display_results" style="visibility:hidden;">
		<iframe id="iframe_insert_results" name="name_display_results" src=""></iframe>
	</div>


	<form action="php_scripts/insert_record.php" method="post" class="record_form" target="name_display_results">
		<div class="container">
			<h1>Insert Record</h1>
			<p>Please fill in this form to insert your new record for a game.</p>
			<hr>
			<div>
				<label for="username"><b>Username:</b></label>
				<input type="text" name="username" maxlength="30" required>
			</div>

			<div>
				<label for="game"><b>Game:</b></label>
				<input type="text" name="game" maxlength="30" required>
			</div>

			<div>
				<label for="record"><b>Record:</b></label>
				<input type="text" name="record" maxlength="30" required>
			</div>

			<div>
				<button id="button_insert_record" type="submit" onclick="display_insert_results(this.id)">Add the record</button>
			</div>
		</div>
	</form>

	

	<form action="php_scripts/display_games.php" method="post"  target="name_frame_display">     
		<input id="test" type="submit" value="TEST" onclick="open_display(document.getElementById('iframe_div_display'))" style="display: none;">
	</form>
	
	<form action="php_scripts/display_records.php" method="post"  target="name_frame_display_records">     
		<input id="test2" type="submit" value="TEST2" onclick="open_display(document.getElementById('iframe_div_display_records'))" style="display: none;">
	</form>

	<div class="display_tables">
		<div id="iframe_div_display" style="display:none;">
			<iframe id="id_iframe_display" name="name_frame_display" src="php_scripts/display_games.php" width="100%" height="700" frameBorder="0"></iframe>
		</div>
	
		<div id="iframe_div_display_records" style="display:none;">
			<iframe id="id_iframe_display_records" name="name_frame_display_records" src="php_scripts/display_records.php" width="100%" height="700" frameBorder="0"></iframe>
		
		</div>



	</div>

	
	
	

	
	
	
	
	
	</body>
	
	
</html>


<script>

document.getElementById("games").className+= " active";

window.onload=function(){
	click_test();
}

function open_insert_game(){ //kleino record an einai anoixto kai anoigo to game
		if(document.getElementById("iframe_div_insert_record").style.display=="block"){
			document.getElementById("iframe_div_insert_record").style.display="none"
		}
		document.getElementById("iframe_div_insert_game").style.display="block";
}

function open_insert_record(){ //kleino game an einai anoixto kai anoigo to record
		if(document.getElementById("iframe_div_insert_game").style.display=="block"){
			document.getElementById("iframe_div_insert_game").style.display="none"
		}
		document.getElementById("iframe_div_insert_record").style.display="block";
}

function open_display(id){
	id.style.display="block";

}

function close_div(div_id){
	if(document.getElementById(div_id).style.display=="block"){
		document.getElementById(div_id).style.display="none";
	}
	
}

function click_test(){
	document.getElementById("test").click();
	document.getElementById("test2").click();
}

function display_insert_results(submit_id){
	document.getElementById("id_display_results").style.visibility="visible";
	x=document.getElementById(submit_id);
	if(submit_id=="button_insert_game"){
		x.src="php_scripts/insert_game.php";
	}
	else if(submit_id=="button_insert_record"){
		x.src="php_scripts/insert_record.php";
	}
	

}


</script>