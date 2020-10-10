<?php session_start();?>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatiable" content="IE=edge">
<meta name="viewport" content="device-width, initial-scale=1">  
 <title> Auction</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="includes/styles/style.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>



<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php if(isset($_SESSION['name'])) echo $_SESSION['name']?></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="product.php">Auction</a></li>
             <li><a href="bidamount.php">Bids</a></li>
             <li><a href="#">Admin</a></li>

            
             
            </ul>
            <ul class="nav navbar-nav navbar-right">
            
              <li><a href="logout.php">Log Out</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

 
