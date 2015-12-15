<?php
session_start();
require 'vendor/autoload.php';
 
use Parse\ParseClient;
 
ParseClient::initialize('ilAdpSlcSs2PYQzZtC9k549MMrEq6GWBEkgPL052', '2ptwsyysoXq6KZ055Rz6qgAVLc6kGqq4geBcYGrV', '5o87OulNuELCkqYB3cju1ETOcLllLqB5K13F12Pg');
use Parse\ParseObject;
use Parse\ParseQuery;
try
{
 $query=new ParseQuery("Farmer");
$query->equalTo("contact_no",$_POST['mobileno']);
if($query->count()>=1)
	{

	header('location:farmerregister.php');
	}
 else
 {
 $name=$_POST['name'];
 $email=$_POST['email'];
 $mobileno=$_POST['mobileno'];
 $address=$_POST['address'];
 $password=$_POST['password'];
$testObject = ParseObject::create("Farmer");
$testObject->set("FName", $name);
$testObject->set("contact_no", $mobileno);
$testObject->set("emailId", $email);
$testObject->set("Address", $address);
$testObject->set("password", md5($password));
$testObject->set("mob_verified",1);
$_SESSION["contact_no"]=$testObject->get("contact_no");
$testObject->save();
header('location:farmerproducts.php');
}
}
catch(Exception $e)
{
header('location:farmerregister.php');
}
?>




