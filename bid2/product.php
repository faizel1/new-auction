<?php
session_start();

require "config.php";
include "header.php";
include "footer.php";




if(isset($_POST['prosubmit'])){
	$iddd=$_SESSION['a'];

	$query="SELECT * FROM `auction` WHERE `auctionid`=$iddd";
	
	echo '
<div class="column">
	<div class ="col-md-5">
	<table  class="table table-striped" id="myTable">
	
	<tr>
	<td width=15%>Auction_Idd</td>
	<td width=15%>Product Detail</td>
	<td width=15%>Auction Type</td>
	<td width=15%>Closing Date</td>
	<td width=15%>Auction Winner</td>
	<td width=15%>Action</td>		


	</tr>';
	
	if($result=mysqli_query($mysqli, $query)){
	while($row=$result->fetch_assoc()){
		
		echo  '<tr>
		      <td width=15%>'.$row['auctionid'].'</td>
			  <td width=15%>'.$row['auction_detail'].'</td>
			  <td width=15%>'.$row['auction_type'].'</td>
			  <td width=15%>'.$row['auction_date'].'</td>
			  <td width=15%>'.$row['auction_winner'].'</td>
			  <td> <a href="admin.php?edit=<?php echo $row["auctionid"];?>"
			  class=" btn btn-info">Edit</a>
			  <a href="admin.php?delete=<?php echo $row["auctionid"];?>"
			  class=" btn btn-Danger">Delete</a>
			  </td>
			  </tr> </div></div>';
	
	}}	

}

	$query="SELECT * FROM auction";
	
	echo '
<div class="column">
	<div class ="col">
	<table  class="table table-striped" >
	
	<tr>
	<td width=15%>Auction_Id</td>
	<td width=15%>Product Detail</td>
	<td width=15%>Auction Type</td>
	<td width=15%>Closing Date</td>
	<td width=15%>Auction Winner</td>
	<td width=15%>Action</td>		


	</tr>';
	
	if($result=mysqli_query($mysqli, $query)){
	while($row=$result->fetch_assoc()){
		
		echo  '<tr>
		<td width=15%>'.$row['auctionid'].'</td>
			  <td width=15%>'.$row['auction_detail'].'</td>
			  <td width=15%>'.$row['auction_type'].'</td>
			  <td width=15%>'.$row['auction_date'].'</td>
			  <td width=15%>'.$row['auction_winner'].'</td>
			  <td> <a href="index.php?edit=<?php echo $row[auctionid];?>"
			  class=" btn btn-info">Edit</a>
			  <a class="deleteLink" onclick="deleteStudent('.$row['auctionid'].')">
			  Delete</a></td> .

			  </td>
			  </tr> </div></div>';
	
	}}	
	?>


<h4>Auction Detail(Product)</h4>
<form action="bidamount.php" method="POST" >
<div class="row">
<div class="col-xs-8">
<table class="table table-default" style="width:25%">
<legend>If you want to bid,Fill out the detail below...</legend>
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
</form>
</div></div>
</body></html><br>
<script>
function deleteStudent(id) {
	$.post("delete.php" , {sid:id} , function(data){
		$("#" + id).fadeOut('slow' , function(){$(this).remove();if(data)alert(data);});
	});	
		
    }</script>