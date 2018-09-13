<html>
<head>
	<title>RECORD ENTRY RESULTS</title>
</head>
<body>
<h1>RECORD ENTRY RESULTS</h1>


<?php

	//dhmiourgia metabliton
	$recordId="";
	$name=$_POST['username'];
	$game=$_POST['game'];
	$record=$_POST['record'];
	
	//elegxos ean exoun dothei oles oi plirofories
	if(!$name||!$game||!$record){
		echo "You have not entered all the required details for entering the record of the game in the base.<br />"
			 ."Please go back and try again.";
		exit;
	}
	
	//elegxos eidikon xaraktiron
	if(!get_magic_quotes_gpc()){  //to get_magic_quotes_gpc einai aparxaiomeno
		$name=addslashes($name);  
		$game=addslashes($game);
		$record=doubleval($record);	
	}  
	
	
	
	//sundesi me to Database
	require_once('connect_database.php');
	$db=db_connect(); //h sunartisi auti einai mesa sto arxeio connect_database.php
	
	//prota prepei na elegxo an to username tou user anistoixi se kapoio xristi tis basis
	//prepare statement and bind for avoid sql injection
	$query=$db->prepare("SELECT count(name) from user where name=?");
	$query->bind_param("s",$name);
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
	$query->bind_param("s",$game);
	$query->execute();
	$result=$query->get_result();
	$row=$result->fetch_row();
	if($row[0]!=1){
		echo "Sorry the game that you enter does not exists in our database.";
		exit;
	}
	$query->free_result();
	
	//elegxos an o user exei topothetisei record gia to sugkekrimeno game
	$query=$db->prepare("SELECT count(record) FROM game_records WHERE game=? and username=?");
	$query->bind_param("ss",$game,$name);
	$query->execute();
	$result=$query->get_result();
	$row=$result->fetch_row();
	if($row[0]==0){
		//prepei na topothetisoume mia nea eggrafi
		$query->free_result();
		$query=$db->prepare("INSERT into game_records (recordId,username,game,record) values(?, ?, ?, ?)");
		$query->bind_param("issd",$recordId,$name,$game,$record);
		if($query->execute()){
			echo "Congratulations!!! Your record for ".$game." is ".$record;
			
		}
		else{
			echo "Something went bad... Please retry...";
		}
		//apeleutherono to sunolo ton apotelesmaton 
		$query->free_result();
		//kleinoume tin sundesi me tin basi
		$db->close();
		exit;  //TELEIONEI EDO TO SCRIPT ME EPITUXIMENI EGGRAFI EAN PROTI FORA TOPOTHETEI O USER RECORD GIA AUTO TO PAIXNIDI
	}
	
	//elegxos ean o idios user exei topothetisei record gia to game kai an to record pou thelei
	//na topothetisei einai megalutero h mikrotero
	$query=$db->prepare("SELECT count(record),record FROM game_records WHERE game=? and username=? and record>?"); //fere mou ta record stin basi tou xristi se auto to paixnidi pou einai megalutera apo to torino
	$query->bind_param("ssd",$game,$name,$record);
	$query->execute();
	$result=$query->get_result();
	$row=$result->fetch_assoc();
	if($row["count(record)"]==1){ //ean to neo record einai mikrotero
		echo $name." the record ".$record." you enter for ".$game." is smaller than your previous one-->".$row["record"];
	}
	else{ //topothetoume to neo record
		$query->free_result();
		$query=$db->prepare("UPDATE game_records SET record=? WHERE game=? and username=?");
		$query->bind_param("dss",$record,$game,$name);
		if($query->execute()){
			echo "Your new record for ".$game." is ".$record;
		}
		else{
			echo "Something went bad... Please retry...";
		}
		
	}
	
	//apeleutherono to sunolo ton apotelesmaton 
	$query->free_result();
	//kleinoume tin sundesi me tin basi
	$db->close();
	



?>


	
</body>
	
</html>