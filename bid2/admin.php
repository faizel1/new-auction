


<?php session_start(); 
 
 include "header.php";
 require "config.php";
 
 if(isset($_POST['add_submit'])){
     
       if(isset($_POST['auction_detail']) and isset( $_POST['auction_date'])and isset( $_POST['auction_type'])){
      
 
         $adtl=$_REQUEST['auction_detail'];
         $adt=$_REQUEST['auction_date'];
         $actyp=$_REQUEST['auction_type'];
         $aucwin=$_REQUEST['auction_winner'];      
 
         $query="INSERT INTO `auction`(`auction_detail`, `auction_date`, `auction_type`,`auction_winner`) 
         VALUES ('$adtl','$adt','$actyp','$aucwin')";
          mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
        ?>  <div class="alert alert-success">
          <strong>Success!</strong> You have sucessfully added an auction
        </div><?php
 
     }
     else{
       echo "Try Again";
       }
   
   }
 
     
 
 
  if(isset($_POST['edit_submit']) ){
    
   if(isset($_POST['auction_detail']) and isset( $_POST['auction_date'])and isset( $_POST['auction_type'])){
 
       $adtl=$_REQUEST['auction_detail'];
       $adt=$_REQUEST['auction_date'];
       $actyp=$_REQUEST['auction_type'];
       $aucwin=$_REQUEST['auc_winr'];      
       $aucid=$_REQUEST['update_id'];
 
 
 $query="UPDATE `auction` SET
 `auction_type`='$actyp',
 `auction_date`='$adt',
 `auction_detail`='$adtl'
 `auction_winner`='$aucwin'
  WHERE `auctionid`='$aucid'";
 
 //echo $query;
 mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
 ?>
 

 
 <div class="alert alert-info alert-dismissible">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 <strong>Update!</strong> you have updated auction number <?php echo $aucid;?> successufully
</div> 
 </div><?php

}
 
 else{
   echo "something is wrong";
 }}
  
 
 if(isset($_POST['submit_delete'])){
 
 if(isset($_POST['id']) ){
      
    $id=$_REQUEST['id'];
    $query="DELETE FROM `bidders` WHERE `auctionid`=$id";
    mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));

        $query="DELETE FROM `auction` WHERE `auctionid`=$id";
   
    mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
  
?>

<div class="alert alert-danger">
  <strong>Deleted!</strong> you have deleted auction number <?php echo $id;?> successufully
</div> 
</div>







<?php
  
  }
   
   else{
       //echo "delete Try Again";
       }
     }
 ?> 
  
 <body>
 
 <div class="container">
 <?php //include ("bidd.php");?>
 </div>
 <feildset><legend>Highest Bidders</legend>
 <form action="bidd.php" method="POST">Enter Auction Id
 <input type="text"  name="txthighest" placeholder="enter auction id">
 <!--<input type="submit" value="Highest Bidder" name="btnhighest"><br>-->
 <button type="submit" class="btn btn-success" name="btnhighest"> Potential Winner</button>

 </feildset>
 
 </form>
<br />
 <feildset><legend>Delete Auction</legend>

 <form action="" method="POST">Enter Auction Id
 <input type="text"  name="id" placeholder="enter auction id">
 <!--<input type="submit" value="Highest Bidder" name="btnhighest"><br>-->
 <button type="submit" class="btn btn-danger" name="submit_delete"> DELETE</button>

 </feildset>
 
 </form>




 
<br />
 <feildset><legend>Manipulate Auction</legend>

<div class="col-xs-8">
 <form action="" method="POST" >
<table class="table table-default" style="width:50%">

<tr style="border:0"><td style="border:0" >Auction Detail </td>
<td style="border:0"><input type="text" name="auction_detail"></td></tr>
<tr><td style="border:0">Auction Type</td>
<td style="border:0"><input type="text" name="auction_type"></td></tr>
<tr><td style="border:0">Auction Date</td>
<td style="border:0"><input type="date" name="auction_date"></td></tr>
<tr><td style="border:0">Auction ID</td>
<td style="border:0"><input type="text" name="update_id"></td></tr>
<tr><td style="border:0">Auction Winner</td>
<td style="border:0"><input type="text" name="auc_winr"></td></tr>
<tr><td cosplan="2" style="border:0">
<!--<input type="submit" value="BID" name="bidsubmit">-->

<button type="submit" class="btn btn-primary" name="add_submit">ADD</button>
<button type="submit" class="btn btn-success" name="edit_submit">Update</button>

</td></tr>
</form>

</div></div>
<!--

 <fieldset ><legend>Auction </legend>
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


 <form action="" method="POST">
 
 <fieldset>
 
 
 
 Enter Auction Id <input type="text" name="id" placeholder="enter auction id">
<input type="submit" value="Delete Auction" name="submit_delete"><br/>
 <button type="submit" class="btn btn-primary" name="submit_delete">DELETE</button>

 </fieldset></form>-->









 








 </body>
  
  </html>