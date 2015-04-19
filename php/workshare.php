<?php
require 'config.php';

$query = $dbo->prepare("SELECT First_Name, Last_Name, Phone, Email, Address, City, State, Zip FROM Customer WHERE workshare=1");
$query->execute();
echo "<table>";
echo "<tr><th>First Name</th><th>Last Name</th><th>Phone</th><th>Email</th><th>Address</th><th>City</th><th>State</th><th>Zip</th></tr>";
while($row = $query->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	foreach($row as $value) {
		echo "<td>{$value}</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>