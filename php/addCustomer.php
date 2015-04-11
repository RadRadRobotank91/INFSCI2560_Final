IDs (do they need to be names?)
membership - CSA type
coffeeSelection - coffee type
beans - coffee bean type
standardLocations - standard pick-up locations
marketLocations - market pick-up locations
otherMembers - other people allowed to pick up
firstName - first name
lastName - last name
address - address
city - city
zip - zip
phoneNumber - phone number
email - email
email2 - verify email (needed?)
marketing - marketing
marketingOther - marketing other
workshare - workshare
check - check
acknowledge - acknowledge (needed?)

 <?php
/*
* Get values from POST
* Some of these are IDs, not names...not sure if that will make a difference or not
* Need to consolidate membership, coffeeSelection, standardLocations, and marketLocations from 4 to 2 variables for proper database entry
*/
$membership = $_POST['membership'];//csaid (1-4)
$coffeeSelection = $_POST['coffeeSelection'];//csaid (5-8)
$beans = $_POST['beans'];//csaid (5-8)
$standardLocations = $_POST['standardLocations'];//lid
$marketLocations = $_POST['marketLocations'];//lid
$otherMembers = $_POST['otherMembers'];//delegates
$fName = $_POST['firstName'];//first_name
$lName = $_POST['lastName'];//last_name
$address = $_POST['address'];//address
$city = $_POST['city'];//city
$zip = $_POST['zip'];//zip
$phone = $_POST['phoneNumber'];//phone
$email = $_POST['email'];//email
//Did not add email2 (verification), as not sure if needed
$marketing = $_POST['marketing'];//mid
$marketingOther = $_POST['marketingOther'];//midOther
//Workshare and Check may require an email sent to OWF and customer, respectively.
$workshare = $_POST['workshare'];//May not be required, not seen in DB
$check = $_POST['check'];//balance (if marketshare)
//Did not add acknowledge, as not sure if needed

//Connect to the database
$link = mysql_connect('Insert source', 'Insert database', 'Insert password');
//If statement displays error if connection cannot be established
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully';
//Set active database
mysql_select_db(owf);

/*
 * Place customer information into Customer table
 * Format example: 'Harrison', 'Smith', '123 Main Street', 'Pittsburgh', 'PA', '90210', '867-5309', 'test@test.net', 'Kurt, Maggie', 3, 'Margaret', 0
 */
$query1 = mysql_query("INSERT INTO Customer (First_Name, Last_Name, Address, City, State, Zip, Phone, Email, Delegates, mid, midOther, workshare) VALUES ('" .$fName. "','" .$lName. "','" .$address. "','" .$city. "','" .$zip. "','" .$phone. "','" .$email. "','" .$otherMembers. "'," .$marketing. ",'" .$marketingOther. "'" .$workshare. ")");
if(!$query1) {
	die('Invalid query 1: ' . mysql_error());
}
//Get the ID generated in last query, which is the customer ID
$customerID = mysql_insert_id;

/*
* Place customerID, CSA type, and location into Cust_has_CSA table
* Format example: 1, 3, 5
*/
$query2 = mysql_query("INSERT INTO Cust_has_CSA (cid, csaid, lid) VALUES (" .$customerID. "," .$membership. "," .$standardLocations. ")");
if(!$query2) {
	die('Invalid query 2: ' . mysql_error());
}
/*
* Determine if CSA is Market share
* If so, add customerID and balance to Cust_has_Bal table
*/
if($membership == 3 || $membership == 4) {
	//Get initial balance from CSAType table
	$balance = mysql_query("SELECT price FROM CSAType WHERE csaid=" .$membership);
	$query3 = mysql_query("INSERT INTO Cust_has_Bal (cid, balance) VALUES (" .$customerID. "," .$balance. ")");
	if(!$query3) {
	die('Invalid query 3: ' . mysql_error());
}
}

mysql_close($link);
?>
