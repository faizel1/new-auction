<?php

$server='localhost';
$username='root';
$pass="root";
$db="auc";
class DB_con
{
function __construct()
{
$con = mysqli_connect($this->$server,$this->$username,$this->$pass,$this->$db);
$this->dbh=$con;
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
}


public function insert_auction($a_name,$a_detail,$a_type,$a_date,$a_winner)
{

$result=mysqli_query($this->dbh,"INSERT INTO `auction`(`auction_detail`, `auction_date`, `auction_type`,`auction_winner`) 
         VALUES ('$a_nmae',$a_detail','$a_date','a_winner')");
return $result;
}

public function insert_bid($uc,$user,$bid)
{
    $result=mysqli_query($this->dbh,"INSERT INTO `bidders`( `auctionid`, `userid`, `bidamount`) VALUES ('$auc','$user','$bid')");


return $result;
}
public function insert_user($fname,$email,$usertype,$password)
{
    $result=mysqli_query($this->dbh,"INSERT INTO `user`(`fullname`, `email`, `usertype`,`password`) 
    VALUES ('$fname','$email','$usertype','$passsword')");

return $result;
}

}


?>












?>