<?php
session_start();
require 'vendor/autoload.php';
use Parse\ParseClient;
use Parse\ParseObject;
use Parse\ParseQuery;
 
ParseClient::initialize('ilAdpSlcSs2PYQzZtC9k549MMrEq6GWBEkgPL052', '2ptwsyysoXq6KZ055Rz6qgAVLc6kGqq4geBcYGrV', '5o87OulNuELCkqYB3cju1ETOcLllLqB5K13F12Pg');
try
{
$query=new ParseQuery("Merchant");
$query->equalTo("contact_no",$_POST['mobileno']);
if(($query->count())>=1)
	{

	header('location:merchantregister.php');
	}
else
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $mobileno=$_POST['mobileno'];
 $address=$_POST['address'];
 $location=$_POST['location'];
 $password=$_POST['password'];
$testObject = ParseObject::create("Merchant");
$testObject->set("Mname", $name);
$testObject->set("contact_no", $mobileno);
$testObject->set("Prefer_Location", $location);
$testObject->set("emailId", $email);
$testObject->set("Address", $address);
$testObject->set("password", md5($password));
$testObject->set("mob_verified",1);
$_SESSION["contact_no"]=$testObject->get("contact_no");
$testObject->save();
header('location:merchantdashboard.php');
}
}
catch(Exception $e)
{
header('location:merchantregister.php');
}

?>
