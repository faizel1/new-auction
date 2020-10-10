<?php
include "header.php";
include "auctionch.php";
error_reporting(1);


?>


<body>
<div class="container-fluid">
<div class="row" >
<div class="col-md-3" >


<?php if($_SESSION['usertype']=="admin")
{
?>
<h3>Insert Auction</h3>
  <hr />
<br>
<form name="insertrecord" method="post">
<div class="form group"style="margin-top:10px">
<input type="text" name="auction_type" class="form-control" value="<?php echo $at;?>" placeholder="Auction Type">

<div class="form group" style="margin-top:10px">
<input type="text" name="auction_detail" class="form-control" value="<?php echo $adt;?>"placeholder="Auction Detail">
</div>

<div class="form group" style="margin-top:10px">
<input type="text" name="auction_address" class="form-control" value="<?php echo $add;?>"placeholder="Auction Address" >
</div>

<div class="form group" style="margin-top:10px">
<input type="date" name="closing_date" class="form-control" value="<?php echo $cldt;?>" placeholder="Closing Date" >
</div>

<div class="form group" style="margin-top:10px">
<?php  if(isset($_GET['id'])){ ?>
    <input type="submit" name="update" value="UPDATE" placeholder="update"class="btn btn-success btn-block"> 
<?php } else {?>   
 <input type="submit" name="insert" value="ADD AUCTION" placeholder="ADD AUCTION"class="btn btn-primary btn-block"> 
<?php } ?>

</div></form><?php }?></div></div>

<!-- middle of the rows -->

<div class="row"  >
<div class="col-md-auto">
<h3>List of Auctions </h3> <hr />
<div class="table-responsive">                
<table id="mytable" class="table table-striped">
<thead>
<th>#</th>
<th>Auction Type</th>
<th>Auction Detail</th>
<th>Address</th>
<th>Status</th>
<th>closing Date</th>
<th>Winner ID</th>

<?php if($_SESSION['usertype']=="admin") {?>
<th>Edit</th>
<th>Delete</th><?php }?>
</thead>
<tbody>

 <?php
  
  $x=0;
  $sql=$fetchdata->fetchdata("auction");

  while($row=mysqli_fetch_array($sql))
  {if($row['closing_date']===date("Y-m-d") and $row['status']!="closed" ) {

$x=$row['id'];
    }}
  
    echo $x;
  if($x!=0){

    $sq=$winner->winner($table,$aucid);
While($ro=mysqli_fetch_array($sq)){
$yx=$ro['userid'];
$xy=$ro['auctionid'];

}  $_POST['aucc']=["auction_winner"=>$yx];
  

          $sql=$winner->updatewinner("auction",$xy,$yx);
          
  if($sql)
  {
  echo "<script>alert('one Auction Winner is setted');</script>";
  }
  else
  {
  echo "<script>alert('Something wentttt wrong. Please try again');</script>";
  }

  }
  $sql=$fetchdata->fetchdata("auction");
  $count=1;
  while($row=mysqli_fetch_array($sql))
  {
  

  ?>
    <tr>
    <td><?php echo $count;?></td>
    <td><?php echo $row['auction_type'];?></td>
    <td><?php echo $row['auction_detail'];?></td>
    <td><?php echo $row['auction_address'];?></td>
    <td><?php echo $row['status'];?></td>
    <td><?php echo $row['closing_date'];?></td>
    <td><?php echo $row['auction_winner'];?></td>
    <?php if($_SESSION['usertype']=="admin") {

?>
 <td><a href="product.php?id=<?php echo htmlentities($row['id']);?>">
 <button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
 <td><a href="product.php?del=<?php echo htmlentities($row['id']);?>">
 <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">
 <span class="glyphicon glyphicon-trash"></span></button></a></td>
    <?php } ?></tr>
<?php
// for couting the auction
$count++;
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</body>
</html>
