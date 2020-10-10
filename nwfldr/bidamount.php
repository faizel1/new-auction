<?php
include "function.php";
include "header.php";


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
        // Posted Values
        
        $array=array(
        "auctionid"=>$_POST["auctionid"],
        "userid"=>$_POST["userid"],
        "bidamount"=>$_POST["bidamount"],
        );
        
                $sql=$insertdata->imp("auction",$array);
        if($sql)
        {
        echo "<script>alert('Record inserted successfully');</script>";
        }
        else
        {
        echo "<script>alert('Something went wrong. Please try again');</script>";
        }
        
   
    }
?>


<body>
<div class="container-fluid">
<div class="row" >
<div class="col-md-3" >
<h3>Insert Auction</h3>
<hr />


<?php
   $sql="";
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
        $at=$adt=$add="";
      }
?>

<br>
<form name="insertrecord" method="post">
<div class="form group"style="margin-top:10px">
<input type="text" name="auctionid" class="form-control" value="<?php echo $at;?>" placeholder="Auction Id"required>

<div class="form group" style="margin-top:10px">
<input type="text" name="userid" class="form-control" value="<?php echo $adt;?>"placeholder="User Id" required>
</div>

<div class="form group" style="margin-top:10px">
<input type="text" name="bidamount" class="form-control" value="<?php echo $add;?>"placeholder="Bid Amount" required>
</div>


<div class="form group" style="margin-top:10px">
<?php  if(isset($_GET['id'])){ ?>
    <input type="submit" name="update" value="Update Bidder" placeholder="Update Bidders"class="btn btn-success btn-block"> 
<?php } else {?>   
 <input type="submit" name="insert" value="Add Bidder" placeholder="ADD Bidder"class="btn btn-primary btn-block"> 
<?php } ?>

</div></form></div></div>

<!-- middle of the rows -->

<div class="row"  >
<div class="col-md-8">
<h3>List of Bidders </h3> <hr />
<div class="table-responsive">                
<table id="mytable" class="table table-striped">
<thead>
<th>#</th>
<th>Auction Id</th>
<th>User Id</th>
<th>Bid Amount</th>



<th>Edit</th>
<th>Delete</th>
</thead>
<tbody>
 <?php
 $fetchdata=new DB_con();
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
  
 <td><a href="bidamount.php?id=<?php echo htmlentities($row['id']);?>">
 <button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
 <td><a href="bidamount.php?del=<?php echo htmlentities($row['id']);?>">
 <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">
 <span class="glyphicon glyphicon-trash"></span></button></a></td>
    </tr>
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
