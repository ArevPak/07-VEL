<?php
	$connect = mysqli_connect('127.0.0.1','root','root','cootyara_hak');
	$query = mysqli_query($connect,'SELECT * FROM users_zak WHERE login="'.$_GET["login"].'"');


	$log = $_GET["login"];
	$pass = $_GET["password"];
	
	$res = mysqli_fetch_assoc($query);
	 
	
	if ($log==$res["login"] AND $pass==$res["password"]) {
		header ('Location: lk_zkaz.php?name='.$res['name'].'&surname='.$res['surname'].''); 
	}
	else{
		header ('Location: enter.php'); 
	}
	
?>
