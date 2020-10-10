<body><div>













<?php

include "footer.php";
//include "bidd.php";
?>
</div> </body> </html>
<?php
/*session_start();
if(($_SESSION['login'])!="loggedin"){
header('location:login.php');
exit();
}*/



include "header.php";
include "config.php";

/*
$s= time();
$n=2020-01-01;
$a=date("Y-m-d",time());

$a=date("Y-m-d",$s);
echo $a;
if($n$a)
echo "hell yeah";
*/?>




<?php

$query="SELECT `auction_detail`,`auctionid` FROM `auction` ";

	if($result=mysqli_query($mysqli, $query)){
	while($row=$result->fetch_assoc()){
        
       // auc(,, $c);
$a=$row['auctionid'];
$b=$row['auction_detail'];
$_SESSION['a']=$a;
       ?>
       <body> <div  style="padding: 0px">
        <form action="product.php" method="POST">
    <div class="col-sm-5 col-md-5 col-xs-5" style="border: 1px solid #eee; margin: 10px;height:200px; width:48%">
    <div>
        <div class="col-sm-4 col-md-4 col-xs-8" style="">
           <img alt="" src="car.jpg" style="height: 200px; width: 100%" />
        </div>
            <div class="col-sm-8 col-md-8 col-xs-16"  style="width=50%">
            <div container>
            <h4>
                Auction <?php echo $a; ?></h4>
            <p> In this auciton there is /are
              <?php echo $b;?> for sale<br><br>
              <br>Click the detail button for more detail.
                        
            <span style="float: right; width:10%; margin: 3px ">  

<button type="submit" name="prosubmit" class="btn btn-success" style="width=30">Detail</a></button></span>
</div> </div> </div></div>
</form>
		
		
	<?php
	}}	?>



