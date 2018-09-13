<?php


//dimiourgia suntomon metabliton
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['psw'];
$password_repeat=$_POST['psw-repeat'];


session_start();


Try{
	
	//elegxos an exoun sumplirothei oi formes
	if(!$username || !$email || !$password || !$password_repeat){
		throw new Exception('You have not filled the form out correctly-please go back and try again.');
	}
	
	//elegxos gia tin egkurotita tou email
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		throw new Exception('That is not a valid email address.Please go back and try again.');
	}
	
	//elegxos gia to mikos tou kodikou
	
	if( (strlen($password)<6 || (strlen($password)>16 ){
		throw new Exception('Your password must be between 6 and 16 characters.Please go back and try again.');
	}
	
	//elegxos an oi kodikoi einai idioi
	if($password!=$password_repeat){
		throw new Exception('The passwords you entered do not match-Please go back and try again.');
	}
	
	register();  //NA TIN FTIAKSO AUTIN EDO TIN SUNARTISI
	
	//eggrafei tin metablhti sunodou
	$_SESSION['valid_user']=$username;
	
	echo 'Your Registration was successful!! Welcome to our group :) ';
	
	
}
catch(Exception $e){
	echo $e->getMessage();
	exit;
}


?>