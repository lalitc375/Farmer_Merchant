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
<a class="btn btn-info" href="merchantUpdateProduct.php" role="button">Back</a>
</div>
</div>
<div class="col-sm-1">
<div>
<a class="btn btn-danger" href="logout.php" role="button">Logout</a>
</div>
</div>

</div>
</div><br><br><br>
<center><h3>Update Product</h3></center>
<br><br><br><?php
session_start();
if(!isset($_SESSION['contact_no']))
{
header('location:homepage.php');
}

?>
<?php
require 'vendor/autoload.php';
 
use Parse\ParseClient;
 use Parse\ParseObject;
use Parse\ParseQuery;
try
{
ParseClient::initialize('ilAdpSlcSs2PYQzZtC9k549MMrEq6GWBEkgPL052', '2ptwsyysoXq6KZ055Rz6qgAVLc6kGqq4geBcYGrV', '5o87OulNuELCkqYB3cju1ETOcLllLqB5K13F12Pg');
$query=new ParseQuery("MerchantBuy");
$query->equalto('objectId',$_GET["id"]);
$result=$query->first();
$_SESSION["id"]=$_GET["id"];
$product=$result->get("Product");
$cost=$result->get("cost");
$maxAmount=$result->get("max_amount");
$location=$result->get("Location");

}
catch(Exception $e)
{}

?>


<form action="merchantupdatesingledata.php" method="post">
<div class="form-horizontal container col-sm-8 col-sm-offset-4 ">
    
    <table id="dataTable" class="col-sm-6">
        <tr>
        <td><hr></td>
        <td><hr></td>
        </tr>
        <tr>

    <td><label for="SUPPLIER" class="col-sm-2 control-label">Product</label></td>
      <td><input type="text" class="form-control" id="product" placeholder="<?php $product?>" name="product" value="<?php echo $product ?>" ></td></tr><tr><td><br></td></tr><tr>

    <td><label for="cost" class="col-sm-2 control-label">Cost(Per Kg) </label></td>
   
      <td><input type="text" class="form-control" id="cost" placeholder="Cost" name="cost" value="<?php echo $cost ?>" ></td>
   
  </tr><tr><td><br></td></tr><tr>
    
    <td><label for="MAX_AMOUNT" class="col-sm-3 control-label">Max Amount(Kg)</label></td>
    
      <td><input type="text" class="form-control" id="TOTAL_AMOUNT" placeholder="Amount" name="amount" value="<?php echo $maxAmount ?>"></td>
   
</tr><tr><td><br></td></tr>
  <tr>
       
    <td><label for="location" class="col-sm-3 control-label">Location</label></td>
   
      <td><input type="text" class="form-control" id="location" value="<?php echo $location ?>" placeholder="Location" name="location"></td>
    
  </tr><tr><td><br></td></tr>
      </table>
    <div class="form-group">
    <div class="col-sm-offset-2 col-sm-8">
      

      <button type="submit" class="btn btn-success" name="submit">Update</button>
      
    </div>
  </div>
</div>
</form>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
