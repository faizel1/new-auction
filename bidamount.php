<?php
error_reporting(1);
include "bidmanipulator.php";
/*if(!($_SESSION["name"])) {
  header("Location:login.php");



} $_SESSION['id'];
$_SESSION['name'];
echo $_POST['aucid'];
echo $_SESSION['usertype'];


$array=array(" id"=>$_GET["del"] );
if(isset($_GET['del']))
    {
$deletedata=new DB_con();
$sql=$deletedata->delete("bidders",$array);
if($sql)
{
echo "<script>alert('Record deleted successfully');</script>";
}
}


$insertdata=new Db_con();
        if(isset($_POST['insert']))
        {
       
        $array=array(
        "auctionid"=>$_POST["auctionid"],
        "userid"=>$_POST["userid"],
        "bidamount"=>$_POST["bidamount"],
        );
        
                $sql=$insertdata->imp("bidders",$array);
        if($sql)
        {
        echo "<script>alert('Bid Accepted');</script>";
        }
        else
        {
        echo "<script>alert('Something went wrong. Please try again');</script>";
        }
        
   
    }*/
?>


<body>
<div class="container-fluid">
<div class="row" >
<div class="col-md-3" >
<h3>Insert Your Bid Here</h3>
<hr />


<?php
 /*  $sql="";
    if(isset($_GET['id']))
    {
        $array=array(

            "id"=>$_GET["id"]
            );
        $userid=intval($_GET['id']);

        $one=new DB_con();
    
      $sql=$one->fetchonerecord("bidders",$array);
    while($row=mysqli_fetch_array($sql))
      {
    
        $at=$row['auctionid'];
        $adt=$row['userid'];
        $add=$row['bidamount'];
      }


if(isset($_POST['update'])){
    
    $updatedata=new DB_con();
    $sql=$updatedata->update("bidders",$_POST['update'],$userid);
    if($sql)
    {
    echo "<script>alert('Record updated successfully');</script>";
    }
    else
    echo "<script>alert('Record do not updated successfully');</script>";

    }
    
      
    }
      else{
        $at=$_POST['aucid'];
        $adt=$_SESSION['id'];
        
        $add="";
      }
*/?>

<br>
<form name="insertrecord" method="post">

<?php $indicator=""; if($_SESSION['usertype']!="admin") $disabled="disabled";
else {
  $disabled="required";


?>Choose the auction you want to bid in Home Page <?php }?>
<div class="form group"style="margin-top:10px">
<input type="text" name="auctionid" class="form-control" value="<?php echo "Choosen Auction Id is==>".$at;?>" placeholder="Auction Id"  <?php echo $disabled?> >

<div class="form group" style="margin-top:10px">
<input type="text" name="userid" class="form-control" value="<?php echo "User Id is==> ".$adt;?>"placeholder="User Id"; <?php echo $disabled?>>
</div>

<div class="form group" style="margin-top:10px">
<input type="text" name="bidamount" class="form-control" value="<?php echo $add;?>"placeholder="Bid Amount" required>
</div>


<div class="form group" style="margin-top:10px">
<?php  if(isset($_GET['id'])){ ?>
    <input type="submit" name="update" value="Update Bidder" placeholder="Update Bidders"class="btn btn-success btn-block"> 
<?php } else {?>   
 <input type="submit" name="insert" value="Add Bidder" placeholder="ADD Bidder"class="btn btn-primary btn-block" > 
<?php } ?>

</div></form></div></div>

<!-- middle of the rows -->

<div class="row"  >
<div class="col-md-8">
<h3>ADD BID </h3> <hr />
<div class="table-responsive">                
<table id="mytable" class="table table-striped">
<thead>
<th>#</th>
<th>Auction Id</th>
<th>User Id</th>
<th>Bid Amount</th>

<?php if($_SESSION['usertype']=="admin") {?>
<th>Edit</th>
<th>Delete</th>
<?php }?>

</thead>
<tbody>


 <?php

 
  $sql=$fetchdata->fetchdata("bidders");
  $count=1;
  while($row=mysqli_fetch_array($sql))
  {
  ?>
    <tr>
    <td><?php echo $count;?></td>
    <td><?php echo $row['auctionid'];?></td>
    <td><?php echo $row['userid'];?></td>
    <td><?php echo $row['bidamount'];?></td>
    <?php if($_SESSION['usertype']=="admin") {

?>
 <td><a href="bidamount.php?id=<?php echo htmlentities($row['id']);?>">
 <button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
 <td><a href="bidamount.php?del=<?php echo htmlentities($row['id']);?>">
 <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">
 <span class="glyphicon glyphicon-trash"></span></button></a></td>
    <?php } ?> </tr>
<?php
// for serial number increment
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
