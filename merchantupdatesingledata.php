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
try
{
ParseClient::initialize('ilAdpSlcSs2PYQzZtC9k549MMrEq6GWBEkgPL052', '2ptwsyysoXq6KZ055Rz6qgAVLc6kGqq4geBcYGrV', '5o87OulNuELCkqYB3cju1ETOcLllLqB5K13F12Pg');
$query=new ParseQuery("MerchantBuy");

$query->equalto('objectId',$_SESSION["id"]);
$object=$query->first();
echo $object->get("Product");
$object->set("Product",$_POST['product']);
$object->set("cost",(int)$_POST['cost']);
$object->set("max_amount",(int)$_POST['amount']);
$object->set("Location",$_POST['location']);
$object->save();
//echo "1";
header('location:merchantproductdata.php');
}
catch(Exception $e)
{
header('location:merchantproductdata.php');


}

?>