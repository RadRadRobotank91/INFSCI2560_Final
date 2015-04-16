<?php 
//Connect to DB:
$link = mysql_connect('Source', 'Login', 'Password'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 
mysql_select_db(owf); 

//Retrieve customer names from admin form:
$cid = $_POST['cid'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
//$balance = $_POST['balance'];
$pDate = //today's date and time

echo $cid, $fname, $lname, $balance, $pDate

//Get current balance: is this accurate way of UPDATING and not adding new?

function editUser($fname, $lname, $balance){

$old_bal = mysql_query("SELECT price FROM CSAType WHERE csaid=" .$membership);
	if(!$old_bal){
		die('Old balance query invalid: ' . mysql_error());
	}
$new_bal = $_POST['balance'];
$balance_query = mysql_query("INSERT INTO Cust_has_Bal (cid, balance) VALUES (" .$customerID. "," .$balance. ");
	if(!$balance_query){
		die('Balance query invalid: ' . mysql_error());
	}
}

//add update for 'order picked up today'

mysql_close($link);
?> 
