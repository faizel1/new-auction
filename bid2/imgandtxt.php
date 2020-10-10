
<?php
require "config.php";
include ("header.php");

if(isset($_POST['username']) and isset( $_POST['username'])){
     echo $u=$_REQUEST['username']."<br>"; 
    echo $p=$_REQUEST['password'];

     $query="SELECT * FROM `admin` WHERE `username`='$u' and `password`='$p'";
$result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
$count = mysqli_num_rows($result);
echo $query;
if ($count >= 1){
 header('location:admin.php');
 //echo $_REQUEST['username'];

}
else{
    echo "Invalid. please try again";
    }}
   
  
?>



<nav class="navbar navbar-default"  >
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">



          <ul class="nav navbar-nav navbar-right"style="padding:0.5%;" >          <form action="" method="POST"  >

          <li> <h4> Sign In. </h4></li>
              <li>    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
</li> <li> 
              <li>      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
</li>
              <li>    <button type="submit" class="btn btn-default" name="submit">Submit</button>
</li>
            </ul><form>

  
            
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


 <?php// include "userdetail.php";?>
   <?php include "footer.php"?>
