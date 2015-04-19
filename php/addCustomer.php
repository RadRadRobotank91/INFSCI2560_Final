 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<!--meta http-equiv="refresh" content="5; url=../main.php" /-->
	
	<title>Customer Success</title>
	
</head>
<body>
 <?php
//Get values from POST
$membership = $_POST['cat'];//csaid (1-4)
$coffeeSelection = $_POST['cat2'];//csaid (5-8)
$locations = $_POST['subcat'];//lid
$otherMembers = $_POST['otherMembers'];//delegates
$fName = $_POST['firstName'];//first_name
$lName = $_POST['lastName'];//last_name
$address = $_POST['address'];//address
$city = $_POST['city'];//city
$state = $_POST['state'];//state
$zip = $_POST['zip'];//zip
$phone = $_POST['phoneNumber'];//phone
$email = $_POST['email'];//email
//Did not add email2 (verification), as not sure if needed
$marketing = $_POST['marketing'];//mid
$marketingOther = $_POST['marketingOther'];//midOther
//Workshare and Check may require an email sent to OWF and customer, respectively.
$workshare = $_POST['workshare'];//workshare (0-1)
$payment = $_POST['check'];//payment (0-1)
$acknowledge = $_POST['acknowledge'];//acknowle (0-1)
$querySuccess = false;
$querySuccess1 = false;
$querySuccess2 = false;
$querySuccess3 = false;

//Testing
// echo ("Membership".$membership.", "."coffee".$coffeeSelection.", "."locations".$locations.", "."otherMembers".$otherMembers.", ");
// echo ("fName".$fName.", "."lName".$lName.", "."address".$address.", "."City".$city.", "."state".$state.", "."zip".$zip.", ");
// echo ("phone".$phone.", "."email".$email.", "."marketing".$marketing.", "."marketingOther".$marketingOther.", ");
// echo ("workshare".$workshare.", "."payment".$payment.", "."acknowledge".$acknowledge.", end.");
//Variables store if query was successful.
$querySuccess;

//Connect to the database
require 'config.php';

/*
 * Place customer information into Customer table
 * Format example: 'Harrison', 'Smith', '123 Main Street', 'Pittsburgh', 'PA', '90210', '412-867-5309', 'test@test.net', 'Kurt, Maggie', 3, 'Margaret', 0, 1, 1
 */
$query = $dbo->prepare("INSERT INTO Customer(First_Name, Last_Name, Address, City, State, Zip, Phone, Email, Delegates, mid, midOther, workshare, pay_id, aid) VALUES('$fName', '$lName', '$address', '$city', '$state', '$zip', '$phone', '$email', '$otherMembers', '$marketing', '$marketingOther', '$workshare', '$payment', '$acknowledge')");
if($query->execute(array('First_Name'=>$fName, 'Last_Name'=>$lName, 'Address'=>$address, 'City'=>$city, 'State'=>$state, 'Zip'=>$zip, 'Phone'=>$phone, 'Email'=>$email, 'Delegates'=>$otherMembers, 'mid'=>$marketing, 'midOther'=>$marketingOther, 'workshare'=>$workshare, 'pay_id'=>$payment, 'aid'=>$acknowledge))) {
	$customerID = $dbo->lastInsertId();
	$querySuccess = true;
	$result = $dbo->prepare("SELECT * FROM Customer");
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
} else {
	echo ("<p>1 - Error inserting Customer information into database.  Please contact Site Administrator.</p>");
}

 echo ("customerID: ".$customerID);

/*
* Place customerID, CSA type, and location into Cust_has_CSA table
* Multiple entries needed if Customer has more than one CSA
* Format example: 1, 3, 5
*/
// if($membership == 0) {
// 	//No CSA present, coffee only
// 	//Insert coffeeSelection into table
// 	$query = $dbo->prepare("INSERT INTO Cust_has_CSA (cid, csaid, lid) values ('$customerID','$coffeeSelection','$locations')");
// 	if($query->execute(array('cid'=>$customerID, 'csaid'=>$coffeeSelection, 'lid'=>$locations))) {
// 		$querySuccess = true;
// 	} else {
// 		echo ("<p>2 - Error inserting Customer information into database.  Please contact Site Administrator.</p>");
// 	}

// } else if($membership != 0) {
// 	//CSA is present, check for coffee
// 	if($coffeeSelection == 0) {
// 		//No coffee
// 		//Insert membership into table
// 		$query = $dbo->prepare("INSERT INTO Cust_has_CSA (cid, csaid, lid) values ('$customerID','$membership','$locations')");
// 		if($query->execute(array('cid'=>$customerID, 'csaid'=>$membership, 'lid'=>$locations))) {
// 			$querySuccess = true;
// 		} else {
// 			echo ("<p>2 - Error inserting Customer information into database.  Please contact Site Administrator.</p>");
// 		}
// 	} else if($coffeeSelection != 0) {
// 		//Coffee
// 		//Insert both membership and coffeeSelection into table
// 		$query = $dbo->prepare("INSERT INTO Cust_has_CSA (cid, csaid, lid) values ('$customerID','$membership','$locations')");
// 		if($query->execute(array('cid'=>$customerID, 'csaid'=>$membership, 'lid'=>$locations))) {
// 			$querySuccess = true;
// 		} else {
// 			echo ("<p>2 - Error inserting Customer information into database.  Please contact Site Administrator.</p>");
// 		}
// 		$query = $dbo->prepare("INSERT INTO Cust_has_CSA (cid, csaid, lid) values ('$customerID','$coffeeSelection','$locations')");
// 		if($query->execute(array('cid'=>$customerID, 'csaid'=>$coffeeSelection, 'lid'=>$locations))) {
// 			$querySuccess = true;
// 		} else {
// 			echo ("<p>2 - Error inserting Customer information into database.  Please contact Site Administrator.</p>");
// 		}
// 	}
// }

if(!empty($membership) || $membership != 99) {
	//CSA has Value
	$query = $dbo->prepare("INSERT INTO Cust_has_CSA (cid, csaid, lid) VALUES ('$customerID','$membership','$locations')");
	if($query->execute(array('cid'=>$customerID, 'csaid'=>$membership, 'lid'=>$locations))) {
		$querySuccess1 = true;
		// echo("Membership inserted to Cust has csa");
	} else {
		echo ("<p>2 - Error inserting Customer information into database.  Please contact Site Administrator.</p>");
	}

} 
if(!empty($coffeeSelection) || $coffeeSelection != 99) {
	//Coffee Selection has Value
	$query = $dbo->prepare("INSERT INTO Cust_has_CSA (cid, csaid, lid) values ('$customerID','$coffeeSelection','$locations')");
	if($query->execute(array('cid'=>$customerID, 'csaid'=>$coffeeSelection, 'lid'=>$locations))) {
		$querySuccess2 = true;
		// echo("coffeeSelection inserted to Cust has csa");
	} else {
		echo ("<p>2 - Error inserting Customer information into database.  Please contact Site Administrator.</p>");
	}

} 


/*
* Determine if CSA is Market share
* If so, add customerID and balance to Cust_has_Bal table
*/
if($membership == 3 || $membership == 4) {
	//Get initial balance from CSAType table
	$query = $dbo->query("SELECT price FROM CSAType WHERE csaid='$membership'");
	if($array = $query->fetch()) {
		$balance = $array[0];
		// echo ("Balance: ".$balance);
		$query = $dbo->prepare("INSERT INTO Cust_has_Bal (cid, balance) values ('$customerID','$balance')");
		if($query->execute(array('cid'=>$customerID, 'balance'=>$balance))) {
			$querySuccess3 = true;
		} else {
			echo ("<p>2 - Error inserting Customer information into database.  Please contact Site Administrator.</p>");
		}
	} else {
		echo ("<p>3 - Error inserting Customer information into database.  Please contact Site Administrator.</p>");
	}
}

if($querySuccess) {
	echo ("<p>Customer information successfully entered into database.</p>");
	// echo ("<p>Redirecting to <a href='../main.php'>homepage</a></p>");
}
if($querySuccess1) {
	echo ("<p>Cust Has CSA Membership successfully entered into database.</p>");
	// echo ("<p>Redirecting to <a href='../main.php'>homepage</a></p>");
}
if($querySuccess2) {
	echo ("<p>Cust has CSA Coffee  successfully entered into database.</p>");
	// echo ("<p>Redirecting to <a href='../main.php'>homepage</a></p>");
}
if($querySuccess3) {
	echo ("<p>Cust has marketshare balance successfully entered into database.</p>");
	// echo ("<p>Redirecting to <a href='../main.php'>homepage</a></p>");
}
?>
</body>
</html>