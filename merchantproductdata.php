<?php
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
ParseClient::initialize('ilAdpSlcSs2PYQzZtC9k549MMrEq6GWBEkgPL052', '2ptwsyysoXq6KZ055Rz6qgAVLc6kGqq4geBcYGrV', '5o87OulNuELCkqYB3cju1ETOcLllLqB5K13F12Pg');

 $product=$_POST['product'];

 $cost=$_POST['cost'];
 $amount=$_POST['amount'];
 $location=$_POST['location'];
try
{
$product=$_POST['product'];
 $query=new ParseQuery("MerchantBuy");
 $query->equalTo("Merchant_Id",$_SESSION["contact_no"]);
 $result=$query->find();
 for($i=0;$i<count($result);++$i)
 {
	$Product[$i]=$result[$i]->get("Product");
 }
 for($i=0;$i<count($product);++$i)
 {
	if( in_array($product[$i], $Product))
		continue;
 	$testObject = ParseObject::create("MerchantBuy");
 	$testObject->set("Merchant_Id",$_SESSION["contact_no"]);
	$testObject->set("Product", $product[$i]);
	$testObject->set("cost", (int)$cost[$i]);
	$testObject->set("max_amount", (int)$amount[$i]);
	$testObject->set("Location", $location[$i]);
	$testObject->save();
 }

 }
 catch(Exception $e)
 {
header('location:merchantproduct.php');
 }
 header('location:merchantdashboard.php');
?>
