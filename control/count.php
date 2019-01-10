<?php

$host="localhost";
$user="root";
$pass="";
$db="test";

$con = mysqli_connect($host,$user,$pass,$db);  

$data=$_GET["data"];
//$id=$_GET["id"];
//$data='2';
//$id='6';
$key = '1235';

 if (!$con)
 {
	 
 }
 else
 {

	//echo "$data";
	$sql_query = "UPDATE temp2 SET data = '$data' WHERE id =1;";
	$result = mysqli_query($con,$sql_query); 
	
	$sql_query1 = "select data from temp2;";
	$result1 = mysqli_query($con,$sql_query1);
					
				
					while($row = mysqli_fetch_array($result1)) 
						 
					 {  
					 
							$data=$row["data"];	
				
					 }
					

	$sql_query2 = "select count,count from result where roll like '$data';";		
	$result2 = mysqli_query($con,$sql_query2);
					
				
					while($row = mysqli_fetch_array($result2)) 
						 
					 {  
					 
					 $count=$row["count"];	
					
					 }
					 
					 
	
	 $count=$count+1;
	 
		$sql_query3 = "UPDATE result SET count = '$count' WHERE roll ='$data';";		
		$result3 = mysqli_query($con,$sql_query3);
		
		$sql_query5 = "select data from temp3;";
		$result5 = mysqli_query($con,$sql_query5);

					while($row = mysqli_fetch_array($result5)) 	 
					{  
					 
							$id=$row["data"];	
				
					 };
		
		//echo "$id";

		$sql_query4 = "UPDATE temp SET serial = AES_ENCRYPT('$data','$key')WHERE nid ='$id';";
		$result4 = mysqli_query($con,$sql_query4);
		
		
 }


?>