<?php
require "config.php";
include "header.php";
include "footer.php";

if(isset($_POST['bidsubmit'])){
	$bid=$_POST['bidamount'];
	$user=$_POST['userid'];
	$auc=$_POST['auctionid']; 
if(!empty($bid)&&!empty($user)and!empty($auc)){


    $query="INSERT INTO `bidders`( `auctionid`, `userid`, `bidamount`) VALUES ('$auc','$user','$bid')";

if(mysqli_query($mysqli,$query))
{
	$query="SELECT * FROM bidders where auctionid=$auc";
	echo "Your bid has been successfuly submitted";
	echo '
	<div class="row">
	<div class="col-md-5"> 
	<table class="table table-condensed">
	
	<tr>
	<td width=15%>Auction_Id</td>
	<td width=15%>userid</td>
	<td width=15%>Bid Amount</td>	
	<td width=15%>Action</td>		

	
	</tr>';
	
	if($result=mysqli_query($mysqli, $query)){
	while($row=$result->fetch_assoc()){
		
		echo  '<tr>
		      <td width=15%>'.$row['auctionid'].'</td>
			  <td width=15%>'.$row['userid'].'   </td>
			  <td width=15%>'.$row['bidamount'].'</td> 
			  <td> <a href="index.php?edit=<?php echo $row[auctionid];?>"
			  class=" btn btn-info">Edit</a>
			  <a href="function.php?delete=<?php echo $row[auctionid];?>"
			  class=" btn btn-danger">Delete</a>
			  </td>
			  </tr>
			 </div></div> 
			  ';
	
	}}

}
else
echo "Invalid Submission";


}

}
else if(isset($_POST['Seeall']))

{
	
	$query="SELECT * FROM bidders";
	echo '
	<div>
	<div class="col-md-6"> 
	<table border="solid"   >
	
	<tr>	
	<td width=15%>Auction_Id</td>
	<td width=15%>User Id</td>
	<td width=15%>Bid Amount</td>	
	<td width=15%>Action</td>		
	
	</tr>';
	
	if($result=mysqli_query($mysqli, $query)){
	while($row=$result->fetch_assoc()){
		
		echo  '<tr>
		<td width=15%>'.$row['auctionid'].'</td>

			  <td width=15%>'.$row['userid'].'</td>
			  <td width=15%>'.$row['bidamount'].'</td>
			  <td> <a href="index.php?edit=<?php echo $row[auctionid];?>"
			  class=" btn btn-info">Edit</a>
			  <a href="function.php?delete=<?php echo $row[auctionid];?>"
			  class=" btn btn-danger">Delete</a>
			  </td> 
			  </tr>
			 </div></div> 
			  ';
	
	}
}

}
else
{	
	$query="SELECT * FROM bidders";
   echo '
 <div>
   <div class="col-md-6">  
   <table class="table table-striped"   >
   
   <tr>	
   <td width=15%>Auction_Id</td>
   <td width=15%>User Id</td>
   <td width=15%>Bid Amount</td>		
   <td width=15%>Action</td>		
   </tr>';
   
   if($result=mysqli_query($mysqli, $query)){
   while($row=$result->fetch_assoc()){
	   
	   echo  '<tr>
	   <td width=15%>'.$row['auctionid'].'</td>

			 <td width=15%>'.$row['userid'].'</td>
			 <td width=15%>'.$row['bidamount'].'</td>
			 <td> <a href="index.php?edit=<?php echo $row[auctionid];?>"
			 class=" btn btn-info">Edit</a>
			 <a href="function.php?delete=<?php echo $row[auctionid];?>"
			 class=" btn btn-danger">Delete</a>
			 </td>
			 
			 </tr>
			 </div>
			 </div>
			 </div>
			 ';
   
   }
}}
  
		
		
	
	

?>

<fieldset>
<fieldset><h3>Auction Bidders</h3>

<form action="bidamount.php" method="POST" >
<div class="row">
<div class="col-xs-8">
<table class="table table-default" style="width:100%">

<tr style="border:0"><td style="border:0" >Auction Id</td>
<td style="border:0"><input type="text" name="auctionid"></td></tr>
<tr><td style="border:0">User Id</td>
<td style="border:0"><input type="text" name="userid"></td></tr>
<tr><td style="border:0">Amount Bid</td>
<td style="border:0"><input type="text" name="bidamount"></td></tr>

<tr><td cosplan="2" style="border:0">
<!--<input type="submit" value="BID" name="bidsubmit">-->
<button type="submit" class="btn btn-success" name="bidsubmit">BID</button>

</td></tr>
</form></fieldset></body>
<form mehod="POST">
<button type="submit" class="btn btn-success" name="seeall">See All</button>

<!--<input type="submit" v name="seeall">-->
</form>
</html><br>
<legend></legend>
<legend>If you want to bid,Fill out the detail below..</legend>
	

