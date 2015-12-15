<?php
session_start();
if(!isset($_SESSION['contact_no']))
{
header('location:homepage.php');
}

?>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!--<title>Bootstrap 101 Template</title>-->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	 <div class="well" style="text-align: center">
      <h2>Farmer Merchant Connect</h2>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <style>
 
.footer {
 
    position: fixed;
 
    height: 40px;
 
    bottom: 0;
 
    width: 100%;
 
    
 
}
 
</style>

</head>
<body>
<div class="col-sm-11" >
<div style="float:right;">
<a class="btn btn-danger" href="logout.php" role="button">Logout</a>
</div>
</div>
<div class="col-sm-12">
<hr>
</div>
<br>
<br><br><br><br>
<div class="container">
<ul class="nav nav-tabs nav-justified col-sm-10">
  <li role="presentation" ><a href="merchantproduct.php">Add Products</a></li>
  <li role="presentation"><a href="merchantUpdateProduct.php">Update Products</a></li>
  <li role="presentation"><a href="merchantProductDelete.php">Delete Products</a></li>
</ul>
</div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>