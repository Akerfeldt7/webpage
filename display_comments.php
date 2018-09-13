<html>

<head>
	

		
		<title>COMMENTS</title>
</head>

<body>

<?php 
/*grapsimo tou arxeiou stin selida */
		/*prota prepei na to anoiksoume pali omos */
		@ $fp=fopen("./comments/comments.txt",'rb'); //to papaki einai gia na min emfanisei to lathos i php afou tha to xeiristo ego me to if
		if(!$fp){
			echo "<p style='color:red'><strong>Your comments could not be processed at this time.<br>Please try again later.</strong></p></body></html>";
			exit;
		}
		
		while(!feof($fp)){
			$name=fgets($fp,65);
			$comment=fgets($fp,999);
			if($name==""||$comment==""){
				break;
			}
			
			echo "<p style='color:green'>name:$name <br>comment--->$comment</p>";
				
			
		}
		
		fclose($fp);



?>

</body>

</html>