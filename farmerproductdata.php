<?php
require 'vendor/autoload.php';
 session_start();
use Parse\ParseClient;
 use Parse\ParseQuery;
ParseClient::initialize('ilAdpSlcSs2PYQzZtC9k549MMrEq6GWBEkgPL052', '2ptwsyysoXq6KZ055Rz6qgAVLc6kGqq4geBcYGrV', '5o87OulNuELCkqYB3cju1ETOcLllLqB5K13F12Pg');
use Parse\ParseObject;
 try
 {
 $product=$_POST['product'];
 $query=new ParseQuery("FarmerSell");
 $query->equalTo("Farmer_Id",$_SESSION["contact_no"]);
 $result=$query->find();
 for($k=0;$k<count($result);++$k)
 {
	$Product[$k]=$result[$k]->get("Product");
 }
 for($i=0;$i<count($product);++$i)
 {
	if(in_array($product[$i], $Product))
		continue;
	$testObject = ParseObject::create("FarmerSell");
	$testObject->set("Product", $product[$i]);
	$testObject->set("Farmer_Id",$_SESSION["contact_no"]);
	$testObject->save();
	$Product[$k++]=$product[$i];
 }
 header('location:farmerproducts.php');
 }
 catch(Exception $e)
 {
 	echo "Error";
 header('location:farmerproducts.php');
 }
echo "Hello World!";
?>
