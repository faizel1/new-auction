<?php
require_once'function.php';
include 'header.php';
if($_POST['submit']){$insertdata=new Db_con();
if(isset($_POST['insert']))
{
// Posted Values

$array=array(
"auction_type"=>$_POST["firstname"],
"auction_detail"=>$_POST["lastname"],
"auction_address"=>$_POST["emailid"],
"closing_date"=>$_POST["contactno"]
);


//$sql=$insertdata->insert($fname,$lname,$emailid,$contactno,$address);
$sql=$insertdata->imp("auction",$array);
if($sql)
{
// Message for successfull insertion
echo "<script>alert('Record inserted successfully');</script>";
echo "<script>window.location.href='index.php'</script>";
}
else
{
// Message for unsuccessfull insertion
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}}
?>


<body>

<div class="container">

<div class="row">

<div class="col-md-12">
<h3>Insert Auction</h3>
<hr />
</div>
</div>


<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Auction Type</b>
<input type="text" name="firstname" class="form-control" required>
</div>
<div class="col-md-4"><b>Auction Detail</b>
<input type="text" name="lastname" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Auction Address</b>
<input type="text" name="emailid" class="form-control" required>
</div>
<div class="col-md-4"><b>Closing Date</b>
<input type="date" name="contactno" class="form-control"  required>
</div>
</div>  



<div class="row">
<div class="col-md-4"><b>Auction winner</b>
<input class="form-control" name="address" disabled>
</div>
</div>  

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="insert" value="Submit">
</div>
</div> 
     
         

</form>           
</div>
</div>
</body>
</html>
