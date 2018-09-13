<html>

<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="news.css">
		<title>COMMENTS</title>
</head>

<body>
	<center><h2 style="color:red">COMMENTS</h2></center>
	<p style="color:red">exei doulitsa akoma polu!!!</p>
	<br>
	<br>
	<br>
	<?php 
		
		$name=$_POST['name'];
		$comment=$_POST['comment'];
		$given_name=true;
		$given_comment=true;
		
		
		if(strcmp($name,"")==0){
			$given_name=false;
			/*echo "<p style='color:red'>You did'not give me name man...<br></p>";*/
		}
		
		if(strcmp($comment,"")==0){
			$given_comment=false;
			/*echo "<p style='color:red'>You did'not comment anything man...<br></p>";*/
		}
		
		
		/*
		echo "<p style='color:red'>Your name is:$name<br></p>";
		echo "<p style='color:red'> and your comment is:$comment</p>";
		*/
		
		//MESA SE AUTO TO IF GRAFOUME TO ONOMA KAI TO COMMENT TOU XRISTI STO ARXEIO MAS
		if($given_name==true && $given_comment==true){
			/*anoigma arxeiou */
			@ $fp=fopen("./comments/comments.txt",'ab'); //to papaki einai gia na min emfanisei to lathos i php afou tha to xeiristo ego me to if
			if(!$fp){
				echo "<p style='color:red'><strong>Your comment could not be processed at this time.<br>Please try again later.</strong></p></body></html>";
				exit;
			}
		
			/*grapsimo sto arxeio */
			//$outputstring="name:".$name."\ncomment:".$comment."\n";
			$outputstring=$name."\n".$comment."\n";
			fwrite($fp,$outputstring,strlen($outputstring));
		
			/*kleisimo arxeiou*/
			fclose($fp);
		}
		
		
		
		
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
			
			//echo "<p style='color:green'>name:$name <br>comment--->$comment</p>";
			//echo "<strong><p style='color:pink;font-family:monospace;font-size: larger;'>$name:</p></strong>";
			//echo "<p style='color:green;font-family:cursive'>$comment</p>";
			echo "<p><span style='color:pink;font-family:monospace;font-size: larger;'><strong>$name:</strong></span><br><span style='color:green;font-family:cursive'>$comment</span></p>";
			
		}
		
		fclose($fp);

		
		
	?>
	
</body>
</html>