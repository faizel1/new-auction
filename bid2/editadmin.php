<?php

require "config.php";

if(isset($_POST['auction_detail']) and isset( $_POST['auction_date'])and isset( $_POST['auction_type'])){
     

  $adtl=$_REQUEST['auction_detail'];
  $adt=$_REQUEST['auction_date'];
  $actyp=$_REQUEST['auction_type'];
  $aucwin=$_REQUEST['auction_winner'];

if(isset($_POST['submit'])){
     $query="INSERT INTO `auction`(`auction_detail`, `auction_date`, `auction_type`,`auction_winner`) 
     VALUES ('$adtl','$adt','$actyp','$aucwin')";

 mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));}
 else{
     echo "hoops";
 }

}

else{
    //echo "Try Again";
    }


if(isset($_POST['id']) ){
     
   $id=$_REQUEST['id'];
       $query="DELETE FROM `auction` WHERE `auctionid`=$id";
  
   mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));}
  
  else{
      //echo "delete Try Again";
      }



?> 
 <?php include ("header.php")?>

<body>
<div>
<?php include ("navbar.php");
include ("bidd.php");?>
</div>

<form action="bidd.php">
<input type="submit" value="Highest Bidder" ><br>

</form>
<fieldset ><legend>
Auction 
 </legend>
<form action="" method="POST">
<br>
Auction Detail:<input type="text" name="auction_detail"><br><br>
Auction Type  :<input type="text" name="auction_type"><br><br>
Auction Date  :<input type="date" name="auction_date"><br><br>
Auction Id    :<input type="text" name="update_id"><br><br>
<input type="submit" value="Add Auciton" name="add_submit">
<input type="submit" value="Edit Auciton" name="edit_submit">
<br><br>


</form>

</fieldset>

</fieldset><legend>Delete Auction</legend>
<form action="" method="POST">

Enter Id :<input type="text" name="id">
<input type="submit" value="Delete Auction" name="submit_delete">
<form>
</fieldset>




</body>
 
 </html>