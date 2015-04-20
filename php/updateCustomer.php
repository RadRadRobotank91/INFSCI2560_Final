<?php
require 'config.php';
$customerID = $_GET['customerID'];
$amount = $_GET['amount'];
//Get CSAs associated with Customer ID
$query = $dbo->query("SELECT * FROM Cust_has_CSA WHERE cid='$customerID'");
$array = $query->fetchAll();
print_r($array.'<br />');
$arrayOne = $array[0];
$arrayTwo = $array[1];
print_r($arrayOne.'<br />');
print_r($arrayTwo.'<br />');
$csaOne = $arrayOne[1];
$locationOne = $arrayOne[2];
echo ($csaOne.'<br />');
echo ($locationOne.'<br />');
$csaTwo = $arrayTwo[1];
$locationTwo = $arrayTwo[2];
echo ($csaTwo.'<br />');
echo ($locationTwo.'<br />');

//Check if csaOne is marketshare, csa, or coffee
if($csaOne == 1 || $csaOne == 2 || $csaOne == 5 || $csaOne == 6 || $csaOne == 7 || $csaOne == 8) {
	//CSA or coffee, add to Cust_makes_Pickup
	$query = $dbo->prepare("INSERT INTO Cust_makes_Pickup (cid, lid) values ('$customerID','$locationOne')");
	$query->execute(array('cid'=>$customerID, 'lid'=>$locationOne));
}
if($csaOne == 3 || $csaOne == 4) {
	//Marketshare, update balance and add to transaction list
	$query = $dbo->query("SELECT balance FROM Cust_has_bal WHERE cid='$customerID'");
	print_r($query->errorInfo());
	$array = $query->fetchAll();
	$balance = $array[1];
	$balance = $balance - $amount;
	$query = $dbo->query("UPDATE Cust_has_Bal SET balance='$balance' WHERE cid='$customerID'");
	print_r($query->errorInfo());
	$query = $dbo->prepare("INSERT INTO Transaction (cid, tPrice, lid) values ('$customerID', '$amount', '$locationOne')");
	$query->execute(array('cid'=>$customerID, 'tPrice'=>$amount, 'lid'=>$locationOne));
	print_r($query->errorInfo());
}
//Check if csaTwo is marketshare, csa, or coffee
if($csaTwo == 1 || $csaTwo == 2 || $csaTwo == 5 || $csaTwo == 6 || $csaTwo == 7 || $csaTwo == 8) {
	//CSA or coffee, add to Cust_makes_Pickup
	$query = $dbo->prepare("INSERT INTO Cust_makes_Pickup (cid, lid) values ('$customerID','$locationTwo')");
	$query->execute(array('cid'=>$customerID, 'lid'=>$locationTwo));
}
if($csaTwo == 3 || $csaTwo == 4) {
	//Marketshare, update balance and add to transaction list
	$query = $dbo->query("SELECT balance FROM Cust_has_bal WHERE cid='$customerID'");
	print_r($query->errorInfo());
	$array = $query->fetchAll();
	$balance = $array[1];
	$balance = $balance - $amount;
	$query = $dbo->query("UPDATE Cust_has_Bal SET balance='$balance' WHERE cid='$customerID'");
	print_r($query->errorInfo());
	$query = $dbo->prepare("INSERT INTO Transaction (cid, tPrice, lid) values ('$customerID', '$amount', '$locationTwo')");
	$query->execute(array('cid'=>$customerID, 'tPrice'=>$amount, 'lid'=>$locationTwo));
	print_r($query->errorInfo());
}

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
echo "</table>";
echo "<br />";
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
echo "</table>";
echo "<br />";
$result = $dbo->prepare("SELECT * FROM Transaction");
$result->execute();
echo "<table>";
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	foreach($row as $value) {
		echo "<td>{$value}</td>";
	}
	echo "</tr>";
}
echo "</table>";
echo "<br />";
?>