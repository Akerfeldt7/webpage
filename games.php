<!DOCTYPE html>


<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="display_games.css">
		<link rel="stylesheet" type="text/css" href="games.css">
		<!--cdn for jQuerry -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<!----------------------------------------------------------------------->

		<script>
			//jQuery here
			$(document).ready(function(){
				$("#display_games").load("php_scripts/display_games.php");
				$("#display_records").load("php_scripts/display_records.php");

				$("#form_insert_game").submit(function(event){
					event.preventDefault();
					var username_game=$("#id_insert_game_username_game").val();
					var name=$("#id_insert_game_name").val();
					var genre=$("#id_insert_game_genre").val();
					var price=$("#id_insert_game_price").val();
					var kind=$("#id_insert_game_kind").val();
					var submit=$("#button_insert_game").val();
					$("#display_results_insert_game").load("php_scripts/insert_game.php", {
						username_game: username_game,
						name: name,
						genre: genre,
						price: price,
						kind: kind,
						submit: submit
					});

					setTimeout(function(){
						$("#display_games").load("php_scripts/display_games.php");
					},2000);

				});

				$("#form_insert_record").submit(function(event){
					event.preventDefault();
					var username=$("#id_insert_record_username").val();
					var game=$("#id_insert_record_game").val();
					var record=$("#id_insert_record_record").val();
					var submit=$("#button_insert_record").val();
					$("#display_results_insert_record").load("php_scripts/insert_record.php", {
						username: username,
						game: game,
						record: record,
						submit: submit
					});

					setTimeout(function(){
						$("#display_records").load("php_scripts/display_records.php");
					},2000);


				});

			});

			
			
		</script>
		
	
	 
	<?php
		require('php_scripts/menu.php');

	?>

	
	<h1> Under Construction </h1>
	
	<form id="form_insert_game" action="php_scripts/insert_game.php" method="post" class="game_form">
		<div class="container">
			<h1>Insert Game</h1>
			<p>Please fill in this form to insert a new game.</p>
			<hr>
			<div>
				<label for="username_game"><b>Username:</b></label>
				<input id="id_insert_game_username_game" type="text" name="username_game" maxlength="30" required>
			</div>

			<div>
				<label for="name"><b>Game:</b></label>
				<input id="id_insert_game_name" type="text" name="name" maxlength="30" required>
			</div>

			<div>
				<label for="genre"><b>Genre:</b></label>
				<input id="id_insert_game_genre" type="text" name="genre" maxlength="30" required>
			</div>

			<div>
				<label for="price"><b>Price:</b></label>
				<input id="id_insert_game_price" type="text" name="price" maxlength="7" required>
			</div>

			<div>
				<label for="kind"><b>Kind:</b></label>	
				<select id="id_insert_game_kind" name="kind" required>
					<option value="video game">video game</option>
					<option value="board game">board game</option>
				</select>
				</div>

			<div>
				<button id="button_insert_game" type="submit" name="submit">Add the game</button>
			</div>
			<p id="display_results_insert_game"></p>

		</div>
	</form>


	<form id="form_insert_record" action="php_scripts/insert_record.php" method="post" class="record_form">
		<div class="container">
			<h1>Insert Record</h1>
			<p>Please fill in this form to insert your new record for a game.</p>
			<hr>
			<div>
				<label for="username"><b>Username:</b></label>
				<input id="id_insert_record_username" type="text" name="username" maxlength="30" required>
			</div>

			<div>
				<label for="game"><b>Game:</b></label>
				<input id="id_insert_record_game" type="text" name="game" maxlength="30" required>
			</div>

			<div>
				<label for="record"><b>Record:</b></label>
				<input id="id_insert_record_record" type="text" name="record" maxlength="30" required>
			</div>

			<div>
				<button id="button_insert_record" type="submit" name="submit">Add the record</button>
			</div>
			<p id="display_results_insert_record"></p>
		</div>
	</form>

	
<section id="game_tables">
	<div id="display_games">

	<!--emfanizetai o Jquery kodikas apo pano -->
		
	</div>

	<div id="display_records">
		
	</div>
</section>	

	
	
	
	
	
</body>
	
	
</html>


<script>

document.getElementById("games").className+= " active";





</script>