<?Php
/////// Update your config.php database login details here /////
$dbhost_name = "holliday.startlogicmysql.com"; // Your host name 
$database = "owf";       // Your database name
$username = "db2560";            // Your login userid 
$password = "1$2S6o%%";            // Your password 
//////// End of database details of your server //////

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host='.$dbhost_name.';dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}
?>