<html>
<head>
	<title> GAME ENTRY RESULTS</title>
</head>
<body>
<h1>GAME ENTRY RESULTS</h1>

<?php
	//dhmiourgia metabliton
	$gameId="";
	$username_game=$_POST['username_game'];
	$name=$_POST['name'];
	$genre=$_POST['genre'];
	$price=$_POST['price'];
	$kind=$_POST['kind'];
	
	//elegxos ean exoun dothei oles oi plirofories
	if(!$name||!$genre||!$price||!$kind){
		echo "You have not entered all the required details for entering the game in the base.<br />"
			 ."Please go back and try again.";
		exit;
	}

	//elegxos eidikon xaraktiron
	if(!get_magic_quotes_gpc()){  //to get_magic_quotes_gpc einai aparxaiomeno
		$name=addslashes($name);
		$genre=addslashes($genre);
		$price=doubleval($price);	
	}  
	
	
	
	
	
	
	//sundesi me to Database
	require_once('connect_database.php');
	$db=db_connect(); //h sunartisi auti einai mesa sto arxeio connect_database.php
	
	//prota prepei na elegxo an to username tou user anistoixi se kapoio xristi tis basis
	//prepare statement and bind for avoid sql injection
	$query=$db->prepare("SELECT count(name) from user where name=?");
	$query->bind_param("s",$username_game);
	$query->execute();
	$result=$query->get_result();
	$row=$result->fetch_row();
	if($row[0]!=1){
		echo "Sorry the name that you enter does not exists in our database.";
		exit;
	}
	$query->free_result();
	
	//deuteron elegxo an to paixnidi uparxei stin basi
	$query=$db->prepare("SELECT COUNT(name) from games where name=?");
	$query->bind_param("s",$name);
	$query->execute();
	$result=$query->get_result();
	$row=$result->fetch_row();
	if($row[0]==1){
		echo "Sorry the game that you enter already exists in our database.";
		exit;
	}
	$query->free_result();
	
	//etoimazoume to query gia eisagogi tou paixnidiou stin basi
	$query=$db->prepare("INSERT into games (gameId,name,price,genre,kind) values(?, ?, ?, ?, ?)");
	$query->bind_param("isdss",$gameId,$name,$price,$genre,$kind);
	if($query->execute()){
		echo "Success :D ";
	}
	else{
		echo "Something went bad... Please retry...";
	}
	
	
	
	
	//apeleutherono to sunolo ton apotelesmaton 
	$query->free_result();
	//kleinoume tin sundesi me tin basi
	$db->close();
	
?>
	
	
	</body>
	
	</html>
	
	
	