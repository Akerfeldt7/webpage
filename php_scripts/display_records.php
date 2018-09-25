
<?php

	//sundesi me to Database
	require_once('connect_database.php');
	$db=db_connect(); //h sunartisi auti einai mesa sto arxeio connect_database.php
	
	$query=$db->prepare("SELECT username,game,record FROM game_records");
	if($query->execute()){
		$result=$query->get_result();
	}
	else{
		echo "Something bad happened...Please try again later";
		$db->close();
		exit;
	}
	
		echo "<table>
			<tr>
				<th id='header' colspan='3'>RECORDS</th>
			</tr>
			<tr>
				<th id='subheader1'>Username</th>
				<th id='subheader2'>Game</th>
				<th id='subheader3'>Record</th>
			</tr>";
		while($row=$result->fetch_assoc()){
			echo "<tr>";
				echo "<td>".$row['username']."</td>";
				echo "<td>".$row['game']."</td>";
				echo "<td>".$row['record']."</td>";
			echo "</tr>";
		}
		echo "</table>";
			
		
				
		
	
	$query->free_result();
	$db->close();



?>

