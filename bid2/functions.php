<?php 
/*	session_start();
    require "config.php";

    if(isset($_POST['username']) and isset( $_POST['username'])){
        
         $u=$_REQUEST['username'];
         $p=$_REQUEST['password'];
    
         $query="SELECT * FROM `admin` WHERE `username`='$u' and `password`='$p'";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    $count = mysqli_num_rows($result);
    
    if ($count >= 1){
     header('location:admin.php');
    }
    else{
        echo "Invalid. please try again";
        }}



*/
?>
<?php 
	//session_start();
    require "config.php";

if(isset($_POST['loginbtn'])){
    if(isset($_REQUEST['email']) ){
        
         $u=$_REQUEST['email'];
         $p=$_REQUEST['password'];
        $u= htmlspecialchars($u);
    
       //    $query="SELECT * FROM `user` WHERE `email`='faizel@yahoo.com'AND `password`='admin'";
         $query="SELECT * FROM `user` WHERE `email`='$u' and `password`='$p'";
    $result = mysqli_query($mysqli, $query) or die(mysqli_error($mysqli));
    echo $count = mysqli_num_rows($result);
    echo $c=0;
  
   if($result=mysqli_query($mysqli, $query)){
        while($row=$result->fetch_assoc()){

            
if($row['usertype']=="admin")
$c=1;
        }

    
    if ($count >= 1){
        if($c==1)
    header('location:bidamount.php');
    

        else if($c==0){
        $_SESSION['login']="loggedin";
    header('location:index.php');}

        else
    echo "Invalid. please try again";
        
    
    }

    }  }}

    if(isset($_POST['registerbtn'])){
     
    if(isset($_POST['fname']) and isset( $_POST['email'])and isset( $_POST['password'])and
     isset( $_POST['cpassword']) ){
     
        
        $fn=$_REQUEST['fname'];
        $em=$_REQUEST['email'];
        $pswd1=$_REQUEST['password'];
        $pswd2=$_REQUEST['cpassword'];


       if (empty($fn)) { 
            $er[0]= "Username is required"; 
        }
        if (empty($em)) { 
            $er[1]= "Email is required"; 
        }
        if (empty($pswd1)) { 
            $er[2]="Password is required"; 
        }
        if (empty($pswd2)) { 
            $er[3]= "you should confirm your pasword"; 
        }
        if ($pswd1 != $pswd2) {
            $er[4]="The two passwords do not match";
        }
        if(count($er)==0){
        $query="INSERT INTO `user`(`fullname`, `email`,`password`) VALUES ('$fn','$em','$pswd1')";
        
       if(mysqli_query($mysqli, $query) or die(mysqli_error($mysqli)))
       header('location:index.php');}
       else
       echo "$er";  
    }
      else
      echo "$er";
    }


    function display_error() {
        global $errors;
    
        if (count($errors) > 0){
            echo '<div class="error">';
                foreach ($errors as $error){
                    echo $error .'<br>';
                }
            echo '</div>';
        }
    }	
?>