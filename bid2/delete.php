
<?php
include "config.php";

if(isset($_REQUEST["sid"]))
{
	$mysqli = new mysqli('localhost' , 'root' , 'root' , 'auc');
	$mysqli->query("DELETE FROM auction where id=".$_POST['sid']);
}else echo 'Not Deleted Error Occured';
?>