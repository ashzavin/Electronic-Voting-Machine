<?php

include "dbConnect.php";



$name=$_GET["name"];
$nid=$_GET["nid"];
$fname=$_GET["fname"];
$add=$_GET["add"];
$email=$_GET["email"];

echo $name." ".$nid;
 $sql_query = "insert into temp (name,nid,fname,address,email) values ('$name','$nid','$fname','$add','$email')";  
 
if(mysqli_query($con,$sql_query))
{
	
	 echo "<h3>Data insertion success...</h3>";
	 
	//header("Location: 1.html");
	 
	 }
else
{
	mysqli_error($con);
	
}





?>