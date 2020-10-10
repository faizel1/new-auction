<?php
include "header.php";
include "function.php";
if(!($_SESSION["name"])) {
    header("Location:login.php");

}
echo $_SESSION['id'];
echo $_SESSION['name'];
//<?php $_SESSION['aucid']=$a;?>

?>


<?php
$fetchdata=new DB_con();
$sql=$fetchdata->fetchdata("auction");
$cnt=1;
while($row=mysqli_fetch_array($sql)){

$a=$row['id'];
$b=$row['auction_detail'];
       ?>
       <body style="background:darkgray" > <div>
        <form action="bidamount.php" method="POST">
    <div class="col-sm-5 col-md-5 col-xs-5" style="border: 1px solid #eee; 
    background:lightgray;margin: 5px;height:200px; width:49%">
    <div>
        <div class="col-sm-4 col-md-4 col-xs-8" style="">
        <img alt="why" src="11.ico " style="height: auto; width: 100%" />
        </div>
            <div class="col-sm-8 col-md-8 col-xs-16"  style="width=50%">
            <div container>
            <h4>
                Auction <?php echo $a; ?></h4>
            <p> In this auciton there is /are
              <?php echo $b;?> for sale<br><br>
              <br>Click the detail button for more detail.
                        
            <span style="float: right; width:10%; margin: 3px ">  
            <br/><br/><br/>
            <input type="hidden" value="<?php echo $a;?> " name="aucid">
<button type="submit" name="prosubmit" class="btn btn-success" style="width=30">Details</button></span>

</div> </div> </div></div>
</form>

		
    <?php
  
    }
    
    
      /*
$s= time();
$n=2020-01-01;
$a=date("Y-m-d",time());

$a=date("Y-m-d",$s);
echo $a;
if($n$a)
echo "hell yeah";
*/
    ?>



