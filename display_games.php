
<html>
<head>
	<link rel="stylesheet" type="text/css" href="display_games.css">
	<title>display games</title>
</head>
<body>

<?php

	//sundesi me to Database
	require_once('connect_database.php');
	$db=db_connect(); //h sunartisi auti einai mesa sto arxeio connect_database.php
	
	$query=$db->prepare("SELECT name,genre,kind FROM games");
	if($query->execute()){
		$result=$query->get_result();
	}
	else{
		echo "Something bad happened...Please try again later";
		$db->close();
		exit;
	}
	
	echo "<div id='div_table_records'>";
		echo "<table>
			<tr>
				<th id='header' colspan='3'>GAMES</th>
			</tr>
			<tr>
				<th id='subheader1'>Name</th>
				<th id='subheader2'>Genre</th>
				<th id='subheader3'>Kind</th>
			</tr>";
		while($row=$result->fetch_assoc()){
			echo "<tr>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['genre']."</td>";
				echo "<td>".$row['kind']."</td>";
			echo "</tr>";
		}
		echo "</table>";
	echo "</div>";
			
		
				
		
	$query->free_result();
	$db->close();



?>


</body>
</html>