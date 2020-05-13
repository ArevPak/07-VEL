<?php
	$connect = mysqli_connect('127.0.0.1','root','root','user_1');
	$query = mysqli_query($connect,'INSERT INTO shoper (name, price, feature, img) VALUES ("'.$_GET['name'].'", "'.$_GET['price'].'","'.$_GET['feature'].'","'.$_GET['img'].'")');
	header ('Location: zakaz_form.php');
?>