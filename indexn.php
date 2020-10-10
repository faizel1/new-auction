<?php
include "function.php";
include "header.php";

//Delete auction
$array=array(

    " id"=>$_GET["del"]
    );
if(isset($_GET['del']))
    {
$deletedata=new DB_con();
$sql=$deletedata->delete("bidders",$array);
if($sql)
{
// Message 
echo "<script>alert('Record deleted successfully');</script>";
echo "<script>window.location.href='index.php'</script>";

}

}


?>
<body>
<div class="container">
<div class="row">
<div class="col-md-12">
<h3>List of Auctions </h3> <hr />
<a href="insert.php"><button class="btn btn-primary"> Add  <span class="glyphicon glyphicon-plus"></span></button></a>
<div class="table-responsive">                
<table id="mytable" class="table table-bordred table-striped">
<thead>
<th>#</th>
<th>Auction Id</th>
<th>USER Id</th>
<th>Bid Amount</th>

<th>Edit</th>
<th>Delete</th>
</thead>
<tbody>
 <?php
 $fetchdata=new DB_con();
  $sql=$fetchdata->fetchdata("bidders");
  $cnt=1;
  while($row=mysqli_fetch_array($sql))
  {
  ?>
    <tr>
    <td><?php echo $cnt;?></td>
    <td><?php echo $row['auction_id'];?></td>
    <td><?php echo $row['user_id'];?></td>
    <td><?php echo $row['bidamount'];?></td>
    
 <td><a href="update.php?id=<?php echo htmlentities($row['id']);?>">
 <button class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
 <td><a href="index.php?del=<?php echo htmlentities($row['id']);?>">
 <button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">
 <span class="glyphicon glyphicon-trash"></span></button></a></td>
    </tr>
<?php
// for serial number increment
$cnt++;
} ?>
</tbody>
</table>
</div>
</div>
</div>
</div>

</body>
</html>
