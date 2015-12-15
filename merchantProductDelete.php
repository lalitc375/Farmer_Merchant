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

    </head>

<body>
<div class="well" style="text-align: center">
      <h2>Farmer Merchant Connect</h2>
  </div>

  <div class="col-sm-offset-9 col-sm-5" >
<div id="demo" class="row">
<div id="demo" class="col-sm-2">
<div id="demo">
<a class="btn btn-info" href="merchantdashboard.php" role="button">Back</a>
</div>
</div>
<div class="col-sm-1">
<div>
<a class="btn btn-danger" href="logout.php" role="button">Logout</a>
</div>
</div>

</div>
</div><br><br><br>
<center><h3>Merchant Products</h3></center>
<br><br><br>

<?php
require 'vendor/autoload.php';
 
use Parse\ParseClient;
 use Parse\ParseObject;
use Parse\ParseQuery;
ParseClient::initialize('ilAdpSlcSs2PYQzZtC9k549MMrEq6GWBEkgPL052', '2ptwsyysoXq6KZ055Rz6qgAVLc6kGqq4geBcYGrV', '5o87OulNuELCkqYB3cju1ETOcLllLqB5K13F12Pg');
?>
<table class="table">
 <?php 
 $query=new ParseQuery("MerchantBuy");
 $query->equalto("Merchant_Id",$_SESSION["contact_no"]);
 $result=$query->find();
 echo"<tr>
  <td>
<b> S.No</b>
 </td>
 <td>
<b> Product</b>
 </td>
  <td>
<b> Cost(Per Kg)</b>
 </td>
  <td>
<b> Maximum Amount(Kg)</b>
 </td>
  <td>
<b> Location</b>
 </td>
 <td><b>Delete
 </b></td>
 </tr>";
 for($i=0;$i<count($result);++$i)
 {
 	echo "<tr><td>".($i+1)."</td><td>".$result[$i]->get("Product")."</td><td>".$result[$i]->get("cost")."</td><td>".$result[$i]->get("max_amount")."</td><td>".$result[$i]->get("Location")."</td><td>"."<a href='http://localhost/Pragyan_Hack/merchantdeletedata.php?id=".$result[$i]->getObjectId()."'>Delete</a></td></tr>";
 }

 ?>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>