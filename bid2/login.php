<?php
session_start();
include 'includes/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatiable" content="IE=edge">
<meta name="viewport" content="device-width, initial-scale=1">  
 <title> Auction</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body style=" background:lightgray;">  
 
<div class="container" style="width: 60%; padding: 100px" >


<legend style="width: 60%; float:center"><h2>Log In</h2></legend>

  
                     <form action="" method="POST" style="width: 60%; padding-left:1%" >
  
    <div class="form-group " >
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter your email address" name="email">
    </div>
    
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="password">
    </div>
    
       
    <button type="submit" class="btn btn-primary" name="loginbtn">Submit</button>
    <button type="submit" class="btn btn-success" ><a href="userdetail.php" style="color:white;">Register</a></button>

                 </form>


</div> 


</body>
 </html>
