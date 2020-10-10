<?php include "header.php";include "function.php";?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: green;
  color: white;
  padding: 6px 2px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: auto;
 
}

/* The popup form - hidden by default */
.form-popup {
 color: white;
  border: 3px solid #f1f1f1;
  z-index: 9;
}
/* Add styles to the form container */
.form-container {
    color:black;
  max-width: 300px;
  padding: 20px;
  background-color: lightgray;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus {
  background-color: #ccc;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<?php if(isset($_POST['psubmit'])){



$array1=array("auctionid"=>16,"userid"=>$_SESSION['id'],"bidamount"=>$_POST['bidamnt'],);


$one=new DB_con();
    
$sql=$one->imp("bidders",$array1);


}
?>


<?php $sql="";
 $_GET['id']=16;
        $array=array("id"=>$_GET['id']);
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

      
    
     ?>

<button class="open-button" class="btn btn-success" onclick="openForm()">Detail</button>

<div class="form-popup" id="myForm">
  <form action="" class="form-container" method="post">
    <h1>Auction Detail</h1>
    <div class="form group"style="margin-top:10px">  <p class="help-block">Auction Type</p>

<input type="text" name="auction_type" class="form-control" value="<?php echo $at;?>" placeholder="Auction Type" disable>

<div class="form group" style="margin-top:10px">  <p class="help-block">Auction Product Quantity</p>

<input type="text" name="auction_detail" class="form-control" value="<?php echo $adt;?>"placeholder="Auction Detail" disable>
</div>

<div class="form group" style="margin-top:10px">  <p class="help-block">Product Address</p>

<input type="text" name="auction_address" class="form-control" value="<?php echo $add;?>"placeholder="Auction Address" disable>
</div>

<div class="form group" style="margin-top:10px">  <p class="help-block">Closing Date</p>

<input type="date" name="closing_date" class="form-control" value="<?php echo $cldt;?>" placeholder="Closing Date" disable>
</div>
<br>
    <input type="text" name="bidamnt"><button type="submit" name="psubmit"class="btn">Bid</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
