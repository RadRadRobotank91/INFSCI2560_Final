<?php
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$email = $_POST['email'];

require 'config.php';
//Get Customer ID associated with account
$query = $dbo->query("SELECT cid FROM Customer WHERE First_Name='$fname' AND Last_Name='$lname' AND Email='$email'");
$array = $query->fetch();
$customerID = $array[0];
//Print out customer name
echo('<p><strong>First Name: </strong>'.$fname.'</p>');
echo('<p><strong>Last Name: </strong>'.$lname.'</p>');
//Get CSA associated with account
$query = $dbo->query("SELECT csaid FROM Cust_has_CSA WHERE cid='$customerID'");
$arrayTwo = $query->fetch();
$csaIdOne = $arrayTwo[0];
$query = $dbo->query("SELECT type FROM CSAType WHERE csaid='$csaIdOne'");
$arrayThree = $query->fetch();
$csaTypeOne = $arrayThree[0];
//Print out CSA
echo('<p><strong>CSA Type(s): </strong>'.$csaTypeOne.'</p>');
//Get pickups associated with account
$query = $dbo->prepare("SELECT * FROM Cust_makes_Pickup WHERE cid='$customerID'");
$query->execute();
echo('<p><strong>Pick-Up History: </strong></p>');
while($row = $query->fetch(PDO::FETCH_ASSOC)) {
	//Print out pick-up history
	foreach($row as $value) {
		echo('<p>'.$value.'</p>';
	}
}
?>