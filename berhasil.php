<?php
session_start();

$username=$_POST['username'];

if(empty($username)){
	header("location:soal2.php?errusername = * username belum di Input");
}
else{
	echo "selamat datang ". $username;
}
?>