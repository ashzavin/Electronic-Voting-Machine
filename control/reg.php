<?php

$host="localhost";
$user="root";
$pass="";
$db="test";

$con = mysqli_connect($host,$user,$pass,$db);  

$data=$_GET["data"];
//$data='5';



 if (!$con)
 {
	 
 }
 else
 {

	//echo "$data";
	$sql_query = "UPDATE temp1 SET data = '$data' WHERE id =1;";
	$result = mysqli_query($con,$sql_query); 
 }


?>