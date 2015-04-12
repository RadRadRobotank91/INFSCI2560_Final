<?php 
//Connect to DB:
$link = mysql_connect('holliday.startlogicmysql.com', 'db2560', 'i$2560$$'); 

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
