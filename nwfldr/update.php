
<?php
 include "function.php";
include "header.php";
$updatedata=new DB_con();
if(isset($_POST['update']))
{
$userid=intval($_GET['id']);

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$emailid=$_POST['emailid'];
$contactno=$_POST['contactno'];
$address=$_POST['address'];


$sql=$updatedata->update('tbluser');

if(!$sql)
{echo "<script>alert('stupid work');</script>";

exit();}
echo "<script>alert('Record Updated successfully');</script>";

}
?>


<?php
// Get the userid
$userid=intval($_GET['id']);
$onerecord=new DB_con();


$array=array(

  "id"=>$_GET["id"]
  );

$sql=$onerecord->fetchonerecord("tblusers",$array);
$cnt=1;
while($row=mysqli_fetch_array($sql))
  {
  ?>
<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Auction Type</b>
<input type="text" name="firstname" value="<?php echo htmlentities($row['auction_type']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Auction Detail</b>
<input type="text" name="lastname" value="<?php echo htmlentities($row['auction_detail']);?>" class="form-control" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Address</b>
<input type="text" name="emailid" value="<?php echo htmlentities($row['auction_address']);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Closing Date</b>
<input type="text" name="contactno" value="<?php echo htmlentities($row['closing_date']);?>" class="form-control" maxlength="10" required>
</div>
</div>
<div class="row">
<div class="col-md-4"><b>Auction Winner</b>
<textarea class="form-control" name="address" >value=<?php echo htmlentities($row['auction_winner']);?></textarea>
</div>
</div>
<?php } ?>
<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div>
     </form>
            
      
	</div>
</div>

</body>
</htm