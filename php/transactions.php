<?php
require 'config.php';

$result = $dbo->prepare("SELECT T.tid AS ID, C.First_Name AS 'First Name', C.Last_Name AS 'Last Name', T.tPrice AS Amount, left(T.pDate,10) AS 'Transaction Date', L.name AS Location FROM Transaction T, Customer C, CSALocation L WHERE C.cid=T.cid AND L.lid=T.lid");
$result->execute();
while($row = $result->fetch(PDO::FETCH_ASSOC)) {
	echo "<tr>";
	foreach($row as $value) {
		echo "<td>{$value}</td>";
	}
	echo "</tr>";
}
?>