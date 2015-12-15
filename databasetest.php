<?php
require 'vendor/autoload.php';
 
use Parse\ParseClient;
 
ParseClient::initialize('ilAdpSlcSs2PYQzZtC9k549MMrEq6GWBEkgPL052', '2ptwsyysoXq6KZ055Rz6qgAVLc6kGqq4geBcYGrV', '5o87OulNuELCkqYB3cju1ETOcLllLqB5K13F12Pg');
use Parse\ParseObject;
 
$testObject = ParseObject::create("FarmerSell");
$testObject->set("Farmer_Id", "123");
$testObject->set("Farmer_Name", "Pratik");



$testObject->save();
echo "Hello World!";
?>




