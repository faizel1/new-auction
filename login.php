<?php include ("validattion.php")?>
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
 
<div class="container"  >
<div class="row">

<div class="col-md-6">

<!--style="width: 60%; padding: 100px-->
<legend style="width: 60%; float:center"><h2>Log In</h2></legend>

  
<form action="" method="POST" style="width: 60%; padding-left:1%" >
  
    <div class="form-group " >
      <label for="email">Email:</label>
      <input type="email" class="form-control" placeholder="Enter your email address" name="email" required>
    </div>
    
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="password" required>
    </div>
    
       
    <button type="submit" class="btn btn-primary" name="loginbtn">Submit</button>

                 </form></div>

<!-- registraiton begin here-->


<div class="col-md-6">

<form  action='' method="POST" style="width: 70%; padding-left:1%" >

 <h4>If You Don't Have An Account Sigup in here</h4><hr>
 
    <div class="form-group">
        <label for="fname">Name</label><br>
        <input type="text"  class="form-control" name="fname" placeholder="Enter your name" class="input-xlarge" required>      
    </div>
 
    <div class="form-group">
      <label for="email">E-mail</label><br>
      <input type="email" class="form-control" name="email" placeholder="Enter your E-mail Address"  required>
    </div>
 
    <div class="form-group">
      <label class="control-label" for="password">Password</label><br>
      <input type="password"  class="form-control" name="password" placeholder="Enter Your Password" required>
    </div>
 
    <div class="form-group">
      <label for="password_confirm">Password (Confirm)</label><br>
      <input type="password"  class="form-control"  name="cpassword" placeholder="Confirm confirm password" required>
    </div>
 
   
      
      <button type="submit" class="btn btn-success" name="registerbtn">Register</button>
      

</form></div></div></div>


</body>
 </html>
