<?php

include "dbConnect.php";


$name=$_GET["username"];
$password=$_GET["password"];


$sql_query = "select name from user where name like '$name' and password like '$password'";

$result = mysqli_query($con,$sql_query); 

	
 if(mysqli_num_rows($result) >0)  
	 
 {  
 $row = mysqli_fetch_assoc($result); 
 
	//include "/control/index.html";
	header("Location: index.html");
    
 }  
 else  
 {   
      
 }  

?>