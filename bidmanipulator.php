<?php 
error_reporting(1);

include "function.php";
include "header.php";

$fetchdata=new DB_con();

if(!($_SESSION["name"])) {
  header("Location:login.php");



} $_SESSION['id'];
$_SESSION['name'];
echo $_POST['aucid'];
echo $_SESSION['usertype'];


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
       
        $array=array(
        "auctionid"=>$_POST["auctionid"],
        "userid"=>$_POST["userid"],
        "bidamount"=>$_POST["bidamount"],
        );
        
                $sql=$insertdata->imp("bidders",$array);
        if($sql)
        {
        echo "<script>alert('Bid Accepted');</script>";
        }
        else
        {
        echo "<script>alert('Something went wrong. Please try again');</script>";
        }
        
   
    }
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
        $at=$_POST['aucid'];
        $adt=$_SESSION['id'];
        
        $add="";
      }?>