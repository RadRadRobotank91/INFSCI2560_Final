<?php


$customerID = $_POST['customerID'];
$amount = $_POST['amount'];
$pickup = $_POST['pickup'];
$location = $_POST['location'];
$querySuccess = false;
$querySuccess2 = false;
$querySuccess3 = false;


// echo('cid '.$customerID.'amount '.$amount.'pickup '.$pickup.'location '.$location." end ");


require 'config.php';

//If Marketshare
if(!empty($amount)) {
	//Update Balance
	$query = $dbo->prepare("UPDATE Cust_has_Bal SET balance=? WHERE cid=?");
		if($query->execute(array($amount,$customerID))) {
			$querySuccess = true;
		} else {
			echo ("<p>1 - Error inserting Customer has balance into database.  Please contact Site Administrator.</p>");
		}
	//Record Transaction
	// echo("amount not empty");
	$query2 = $dbo->prepare("INSERT INTO Transaction (cid, tPrice, lid) values ('$customerID', '$amount', '$location')");
		if($query2->execute(array('cid'=>$customerID, 'tPrice'=>$amount, 'lid'=>$location))) {
			$querySuccess2 = true;
		} else {
			echo ("<p>1 - Error inserting Transaction into database.  Please contact Site Administrator.</p>");
		}
}

//If CSA
if($pickup != 0) {
	// echo("pickup not zero");
	$query = $dbo->prepare("INSERT INTO Cust_makes_Pickup (cid, lid) values ('$customerID','$location')");
		if($query->execute(array('cid'=>$customerID, 'lid'=>$location))) {
			$querySuccess3 = true;
		} else {
			echo ("<p>1 - Error inserting Customer makes pick up into database.  Please contact Site Administrator.</p>");
		}
}

if($querySuccess) {
	echo ("<p>Customer has balance successfully entered into database.</p>");
	// echo ("<p>Redirecting to <a href='../main.php'>homepage</a></p>");
}
if($querySuccess2) {
	echo ("<p>Transaction successfully entered into database.</p>");
	// echo ("<p>Redirecting to <a href='../main.php'>homepage</a></p>");
}
if($querySuccess3) {
	echo ("<p>Customer makes pickup successfully entered into database.</p>");
	// echo ("<p>Redirecting to <a href='../main.php'>homepage</a></p>");
}

echo("<p><a href='../admin/admin.php'>Return to the Dashboard</a></p>");

?>