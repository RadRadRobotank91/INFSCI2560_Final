<?php
//Get file name
$fileName="test.txt";
//Open file in append mode
$fp = fopen($fileName, 'a') or die ("Can't open the file.");
//Get values from page form
$membership = $_POST['membership'];
$coffee = $_POST['coffee'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$workshare = $_POST['workshare'];
//Write values to file
fwrite($fp, $membership . "\n");
fwrite($fp, $coffee . "\n");
fwrite($fp, $fname . "\n");
fwrite($fp, $lname . "\n");
fwrite($fp, $address . "\n");
fwrite($fp, $city . "\n");
fwrite($fp, $state . "\n");
fwrite($fp, $zip . "\n");
fwrite($fp, $phone . "\n");
fwrite($fp, $email . "\n");
fwrite($fp, $workshare . "\n");
//Close file
fclose($fp);
?>