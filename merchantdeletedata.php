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
$query->equalto('objectId',$_GET["id"]);
$result=$query->first();
$result->destroy();
header('Location:merchantProductDelete.php');
}
catch(Exception $e)
{
	header('Location:merchantProductDelete.php');
}
?>