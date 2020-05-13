<?php
	 $connect = mysqli_connect("127.0.0.1","root","root","cootyara_hak");
     $query = mysqli_query($connect,'INSERT INTO zakazy (id_pak, price, adress) VALUE ("'.$_GET['id_pak'].'","'.$_GET['price'].'","'.$_GET['adress'].'")'); 
     header ('Location: lk_zkaz.php?del='. $_GET['del'].'');
?>