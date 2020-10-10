<?php 
    session_start();
    $_SESSION['logged']="false";
    include "function.php";


if(isset($_POST['loginbtn'])){


$validate=new DB_con();

         
        $sql=$validate->validate($_POST['email'],$_POST['password']);
    echo $count = mysqli_num_rows($sql);
    if($count>=1){
        $_SESSION['logged']="true";
    header('location:index.php');
    }
    else{
    echo "<script>alert('Invalid Input');</script>";
   // header('location:login.php');

}

    echo $c=0;
  
 }

    if(isset($_POST['registerbtn'])){
     
$er="";
        if(isset($_POST['fname']) and isset( $_POST['email'])and isset( $_POST['password'])and
     isset( $_POST['cpassword']) ){
                 
        $fn=$_REQUEST['fname'];
        $em=$_REQUEST['email'];
        $pswd1=$_REQUEST['password'];
        $pswd2=$_REQUEST['cpassword'];


        if ($pswd1 != $pswd2) {
            $er="The two passwords do not match";
        }
        if($er==""){

        $array=array(
            "fullname"=>$_POST["fname"],
            "email"=>$_POST["email"],
            "password"=>$_POST["password"],
            );

            $register=new DB_con();
            $sql=$register->imp("user",$array);
            
            if($sql)
            {
            echo "<script>alert('you have Registerd successfully');</script>";
            header("location:index.php");

            }
            else
            {
            echo "<script>alert('Something went wrong. Please try again');</script>";
            }       
    }

else
echo $er;

}
      else
      echo "error";
    }


	
?>