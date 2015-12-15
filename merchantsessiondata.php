<?php
session_start();
require 'vendor/autoload.php';

 
use Parse\ParseClient;
use Parse\ParseQuery;
 
ParseClient::initialize('ilAdpSlcSs2PYQzZtC9k549MMrEq6GWBEkgPL052', '2ptwsyysoXq6KZ055Rz6qgAVLc6kGqq4geBcYGrV', '5o87OulNuELCkqYB3cju1ETOcLllLqB5K13F12Pg');

$query=new ParseQuery("Merchant");
$query->equalTo("contact_no",$_POST[""]);
$object=$query->first();
if($object->get("password")==md5($_POST[""]))
{
	$_SESSION["contact_no"]=$object->get("contact_no");
}
else
	echo "Invalid Username or Password";

?>