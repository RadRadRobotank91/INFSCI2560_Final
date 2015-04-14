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
$workshare = $_POST['workshare'];//workshare
$check = $_POST['check'];//Not present in database

echo ($membership.'<br />');
echo ($coffeeSelection.'<br />');
echo ($locations.'<br />');
echo ($otherMembers.'<br />');
echo ($fName.'<br />');
echo ($lName.'<br />');
echo ($address.'<br />');
echo ($city.'<br />');
echo ($state.'<br />');
echo ($zip.'<br />');
echo ($phone.'<br />');
echo ($email.'<br />');
echo ($marketing.'<br />');
echo ($marketingOther.'<br />');
echo ($workshare.'<br />');
echo ($check.'<br />');

//Connect to the database
require 'config.php';

/*
 * Place customer information into Customer table
 * Format example: 'Harrison', 'Smith', '123 Main Street', 'Pittsburgh', 'PA', '90210', '867-5309', 'test@test.net', 'Kurt, Maggie', 3, 'Margaret', 0
 */
$query = $dbo->prepare("INSERT INTO Customer(First_Name, Last_Name, Address, City, State, Zip, Phone, Email, Delegates, mid, midOther, Workshare) VALUES(:First_Name, :Last_Name, :Address, :City, :State, :Zip, :Phone, :Email, :Delegates, :mid, :midOther, :Workshare)");
$query->execute(array('First_Name'=>$fName, 'Last_Name'=>$lName, 'Address'=>$address, 'City'=>$city, 'State'=>$state, 'Zip'=>$zip, 'Phone'=>$phone, 'Email'=>$email, 'Delegates'=>$otherMembers, 'mid'=>$marketing, 'midOther'=>$marketingOther, 'Workshare'=>$workshare));
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
/*
* Place customerID, CSA type, and location into Cust_has_CSA table
* Multiple entries needed if Customer has more than one CSA
* Format example: 1, 3, 5
*
if($membership == 99) {
	//No CSA present, coffee only
	//Insert coffeeSelection into table
	$result = mysql_query("insert into Cust_has_CSA (cid, csaid, lid) values ('$customerID','$coffeeSelection','$locations')");
	if (!$result) {
    	echo ("Insert into Cust_has_CSA was not successful.");
	}
} else if($membership != 99) {
	//CSA is present, check for coffee
	if($coffeeSelection == 99) {
		//No coffee
		//Insert membership into table
		$result = mysql_query("insert into Cust_has_CSA (cid, csaid, lid) values ('$customerID','$membership','$locations')");
		if (!$result) {
    		echo ("Insert into Cust_has_CSA was not successful.");
		}
	} else if($coffeeSelection != 99) {
		//Coffee
		//Insert both membership and coffeeSelection into table
		$result = mysql_query("insert into Cust_has_CSA (cid, csaid, lid) values ('$customerID','$membership','$locations')");
		if (!$result) {
    		echo ("Insert into Cust_has_CSA was not successful.");
		}
		$result = mysql_query("insert into Cust_has_CSA (cid, csaid, lid) values ('$customerID','$coffeeSelection','$locations')");
		if (!$result) {
    		echo ("Insert into Cust_has_CSA was not successful.");
		}
	}
}
/*
* Determine if CSA is Market share
* If so, add customerID and balance to Cust_has_Bal table
*
if($membership == 3 || $membership == 4) {
	//Get initial balance from CSAType table
	$balance = mysql_query("select price from CSAType where csaid='$membership'");
	$result = mysql_query("insert into Cust_has_Bal (cid, balance) values ('customerID','$balance')");
	if (!$result) {
    	echo ("Insert into Cust_has_Bal was not successful.");
	}
}
*/
?>