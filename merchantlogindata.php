<?php
session_start();
require 'vendor/autoload.php';

 
use Parse\ParseClient;
use Parse\ParseQuery;
 
ParseClient::initialize('ilAdpSlcSs2PYQzZtC9k549MMrEq6GWBEkgPL052', '2ptwsyysoXq6KZ055Rz6qgAVLc6kGqq4geBcYGrV', '5o87OulNuELCkqYB3cju1ETOcLllLqB5K13F12Pg');
try
{
$query=new ParseQuery("Merchant");
$query->equalTo("contact_no",$_POST["mobileno"]);
$object=$query->first();
if($object->get("password")==md5($_POST["password"]))
{
	$_SESSION["contact_no"]=$object->get("contact_no");
	header('location:merchantdashboard.php');
}
else
{
header('location:merchantlogin.php');
}
}
catch(Exception $e)
{
header('location:merchantlogin.php');
}

?>