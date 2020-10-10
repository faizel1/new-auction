<?php

$db='localhost';
$username='root';
$pass="root";

$mysqli=mysqli_connect($db, $username, $pass);
if (!$mysqli){
die('db conection failed'.mysqli_error());}

	$dbname=mysqli_select_db($mysqli, 'auc');
	if(!$dbname){
		die("Unable to select database: " . mysqli_error($mysqli));
	}

?>



    
