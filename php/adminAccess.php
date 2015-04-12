<?php 
//Connect to DB:
***REMOVED*** 

if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully'; 
mysql_select_db(owf); 

//Retrieve customer names from admin form:
$fname = $_POST['fname'];
$lname = $_POST['lname'];

function editUser($fname, $lname, $balance){
	
	
	
	
}


$link->close();
?> 
