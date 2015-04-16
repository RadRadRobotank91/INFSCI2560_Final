<?php 
//Retrieve customer names from admin form:
$fname = $_POST['firstName'];
$lname = $_POST['lastName'];
$address = $_POST['address'];
$amount = $_POST['amount'];
$pickup = $_POST['pickup'];

echo ($fname.'<br />');
echo ($lname.'<br />');
echo ($address.'<br />');
echo ($pickup.'<br />');
echo ($amount.'<br />');
//Connect to Database
//require 'config.php';

//$query = $dbo->query("SELECT cid, lid FROM Customer WHERE First_Name='$fname' AND Last_Name='$lname' AND Address='$address'");
//$array = $query->fetch();
//$customerID = $array[0];
//$locationID = $array[1];
//echo($customerID.'<br />');
//echo($locationID.'<br />');
/*
if ($pickup == "Yes") {
	$query = $dbo->prepare("INSERT INTO Cust_makes_Pickup (cid, pDate, lid) values ('$customerID', NOW(), '$locationID')");
	$query->bind_param($customerID, $pDate, $locationID);
	$query->execute();
	$result = $dbo->prepare("SELECT * FROM Cust_makes_Pickup");
	$result->execute();
	echo "<table>";
	while($row = $result->fetch(PDO::FETCH_ASSOC)) {
		echo "<tr>";
		foreach($row as $value) {
			echo "<td>{$value}</td>";
		}
		echo "</tr>";
	}
	echo "</table>";*/
}
*/
if ($amount != 0) {
	//Update balance
}
/*$query = $dbo->prepare("INSERT INTO Cust_has_Bal (cid, balance) values ('$customerID','$balance')");
$query->execute(array('cid'=>$customerID, 'balance'=>$balance));
$result = $dbo->prepare("SELECT * FROM Cust_has_Bal");
$result->execute();
echo "<table>";
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	foreach($row as $value) {
		echo "<td>{$value}</td>";
	}
	echo "</tr>";
}
echo "</table>";*/
?> 
