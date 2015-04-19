<?php
require 'config.php';

$result = $dbo->prepare("SELECT * FROM Cust_makes_Pickup");
$result->execute();
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	foreach($row as $value) {
		echo "<td>{$value}</td>";
	}
	echo "</tr>";
}
?>