<?php
include "function.php";
include "header.php";


$array=array(" id"=>$_GET["del"] );
if(isset($_GET['del']))
    {
$deletedata=new DB_con();
$sql=$deletedata->delete("auction",$array);
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
        "auction_type"=>$_POST["auction_type"],
        "auction_detail"=>$_POST["auction_detail"],
        "auction_address"=>$_POST["auction_address"],
        "closing_date"=>$_POST["closing_date"]
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
    
      $sql=$one->fetchonerecord("auction",$array);
    while($row=mysqli_fetch_array($sql))
      {
    
        $at=$row['auction_type'];
        $adt=$row['auction_detail'];
        $add=$row['auction_address'];
        $cldt=$row['closing_date'];
      }


if(isset($_POST['update'])){
    
    $updatedata=new DB_con();
    $sql=$updatedata->update("auction",$_POST['update'],$userid);
    if($sql)
    {
    echo "<script>alert('Record updated successfully');</script>";
    }
    else
    echo "<script>alert('Record do not updated successfully');</script>";

    }
    
      
    }
      else{
        $at=$adt=$add=$cldt="";
      }
?>

<br>
<form name="insertrecord" method="post">
<div class="form group"style="margin-top:10px">
<input type="text" name="auction_type" class="form-control" value="<?php echo $at;?>" placeholder="Auction Type"required>

<div class="form group" style="margin-top:10px">
<input type="text" name="auction_detail" class="form-control" value="<?php echo $adt;?>"placeholder="Auction Detail" required>
</div>

<div class="form group" style="margin-top:10px">
<input type="text" name="auction_address" class="form-control" value="<?php echo $add;?>"placeholder="Auction Address" required>
</div>

<div class="form group" style="margin-top:10px">
<input type="date" name="closing_date" class="form-control" value="<?php echo $cldt;?>" placeholder="Closing Date" required>
</div>

<div class="form group" style="margin-top:10px">
<?php  if(isset($_GET['id'])){ ?>
    <input type="submit" name="update" value="UPDATE" placeholder="update"class="btn btn-success btn-block"> 
<?php } else {?>   
 <input type="submit" name="insert" value="ADD AUCTION" placeholder="ADD AUCTION"class="btn btn-primary btn-block"> 
<?php } ?>

</div></form></div></div>

<!-- middle of the rows -->

<div class="row"  >
<div class="col-md-8">
<h3>List of Auctions </h3> <hr />
<div class="table-responsive">                
<table id="mytable" class="table table-striped">
<thead>
<th>#</th>
<th>Auction Type</th>
<th>Auction Detail</th>
<th>Address</th>
<th>Posting Date</th>
<th>closing Date</th>
<th>Auction Winner</th>


<th>Edit</th>
<th>Delete</th>
</thead>
<tbody>
 <?php
 $fetchdata=new DB_con();
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
    <td><?php echo $row['posting_date'];?></td>
    <td><?php echo $row['closing_date'];?></td>
    <td><?php echo $row['auction_winner'];?></td>
 <td><a href="product.php?id=<?php echo htmlentities($row['id']);?>">
 <button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
 <td><a href="product.php?del=<?php echo htmlentities($row['id']);?>">
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
