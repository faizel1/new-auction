<?php error_reporting(1);

include "function.php";

$fetchdata=new DB_con();
$winner=new DB_con();


if(!($_SESSION["name"])) {
  header("Location:login.php");
}
else
 $_SESSION['aucid'];



 
$array=array(" id"=>$_GET["del"] );
if(isset($_GET['del']))
    {
$deleteauction=new DB_con();

$sql=$deleteauction->delete("auction",$array);
if($sql)
{
echo "<script>alert('Record deleted successfully');</script>";
}
else
echo '<script>alert("This auction has already, a bidder,if 
you want to delete the auction delete the bidders detail first");</script>';

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