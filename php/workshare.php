<?php
require 'config.php';

$query = $dbo->prepare("SELECT First_Name, Last_Name, Phone, Email, Address, City, State, Zip FROM Customer WHERE workshare=1");
$query->execute();
while($row = $query->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	foreach($row as $value) {
		echo "<td>{$value}</td>";
	}
	echo "</tr>";
}
?>