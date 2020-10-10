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
$sql=$deletedata->delete("auction",$array);
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
  $cnt=1;
  while($row=mysqli_fetch_array($sql))
  {
  ?>
    <tr>
    <td><?php echo $cnt;?></td>
    <td><?php echo $row['auction_type'];?></td>
    <td><?php echo $row['auction_detail'];?></td>
    <td><?php echo $row['auction_address'];?></td>
    <td><?php echo $row['PostingDate'];?></td>
    <td><?php echo $row['closing_date'];?></td>
    <td><?php echo $row['auction_winner'];?></td>
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
