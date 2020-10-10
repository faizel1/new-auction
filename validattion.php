<?php
session_start();
include 'function.php';

if(isset($_POST['loginbtn'])){

  $validate=new DB_con();      
$sql=$validate->validate($_POST['email'],$_POST['password']);
$row  = mysqli_fetch_array($sql);
      
  if(is_array($row)){
        $_SESSION["id"] = $row['id'];
        $_SESSION["name"] = $row['fullname'];
        $_SESSION["usertype"]=$row['usertype'];
                    }
      else{
      echo "<script>alert('Invalidd Input');</script>";
          }
     
//this if was out of bracket
  if(isset($_SESSION["id"])) {
    header("Location:index.php");
                             }
                              }



   if(isset($_POST['registerbtn'])) {
  
                     
            $fn=$_REQUEST['fname'];
            $em=$_REQUEST['email'];
            $pswd1=$_REQUEST['password'];
            $pswd2=$_REQUEST['cpassword'];
    
    
            if ($pswd1 == $pswd2) 
            {
                
            $array=array(
                "fullname"=>$_POST["fname"],
                "email"=>$_POST["email"],
                "password"=>$_POST["password"],
                );
    
                $register=new DB_con();
                $sql=$register->imp("user",$array);

                if($sql){
                header("location:login.php");
                echo "<script>alert('Something wentt');</script>";

            
            }             
                else{
                 echo "<script>alert('Something wentt wrong. Please try again');</script>";
                    }         
            }
    
          else
            $er="The two passwords do not match";    
                                       }



?>