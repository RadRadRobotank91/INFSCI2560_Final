<?php

//Connect to the database
require 'config.php';
 
//Get values from POST
$term = $_GET['term']; //search term

$query = $dbo->query("SELECT * FROM Customer WHERE First_Name LIKE '%".$term."%' OR Last_Name LIKE '%".$term."%' ORDER BY First_Name");
 $json=array();
 
    while($person = $query->fetch() ){
         $json[]=array(
                    'value'=> $person["cid"],
                    'label'=>$person["First_Name"]." ".$person["Last_Name"]
                        );
    }
 
 echo json_encode($json);
 
?>
