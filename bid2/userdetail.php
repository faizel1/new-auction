<?php

require "config.php";


if(isset($_POST['fname']) and isset( $_POST['email'])and isset( $_POST['password'])and isset( $_POST['cpassword']) ){
     

  $fn=$_REQUEST['fname'];
  $em=$_REQUEST['email'];
  $phn=$_REQUEST['phonenumber'];
  $bdamnt=$_REQUEST['password'];

  $query="INSERT INTO `user`(`fullname`, `email`, `phonenumber`,`password`) VALUES ('$fn','$em','$phn','$bdamnt')";

 if(mysqli_query($mysqli, $query) or die(mysqli_error($mysqli)))
 header('location:index.php');}
else
//echo "some thing is wrong";

?>

<form class="form-horizontal" action='' method="POST"  >
  <fieldset style=" " >
   <div style="  "> <div id="legend" >
      <legend class="">Register</legend>
    </div>
    <div class="control-group" >
      
      <label class="control-label"  for="username">Full Name</label>
      <div class="controls">
        <input type="text" id="username" name="fname" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your Full Name</p>
      </div>
    </div>
 
    <div class="control-group">
      
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your E-mail</p>
      </div>
    </div>


    <div class="control-group">
      
      <label class="control-label" for="phonenumber">Phone Number</label>
      <div class="controls">
        <input type="text" id="email" name="phonenumber" placeholder="" class="input-xlarge">
        <p class="help-block">Please provide your phone number</p>
      </div>
    </div>


    <div class="control-group">
      
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="text" id="email" name="password" placeholder="" class="input-xlarge">
        <p class="help-block">Enter Password</p>
      </div>
    </div>

    <div class="control-group">
      
      <label class="control-label" for="password">Confirm Password</label>
      <div class="controls">
        <input type="text" id="email" name="cpassword" placeholder="" class="input-xlarge">
        <p class="help-block">Confirm Your Password</p>
      </div>
    </div>
 
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button class="btn btn-success">Register</button>
      </div>
    </div>
  </fieldset>
