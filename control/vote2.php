<?php

$host="localhost";
$user="root";
$pass="";
$db="test";

$con = mysqli_connect($host,$user,$pass,$db);  

 if (!$con)
 {
	 
 }
 else
 {
					$sql_query1 = "select data from temp3;";
					$result1 = mysqli_query($con,$sql_query1);
					
				
					while($row = mysqli_fetch_array($result1)) 
						 
					 {  
					 
							$data=$row["data"];	
				
					 }
					
					
					$sql_query = "select name,nid,reg,matched,address,age from temp where nid like '$data';";
					
					$result = mysqli_query($con,$sql_query);
					
				
					while($row = mysqli_fetch_array($result)) 
						 
					 {  
					 
					 $name=$row["name"];	
					 $nid=$row["nid"];
					
					 $reg=$row["reg"];
					 $matched=$row["matched"];
					 $add=$row["address"];
					 $age=$row["age"];
					 }
				 $pa=$matched;
				 header('Location: http://192.168.0.178/?abcde'.$pa.'z');
				 
				 if($matched==0)
				 {
					$sql_query2 = "UPDATE temp SET matched = 1 WHERE nid ='$data';";
					$result2 = mysqli_query($con,$sql_query2);
					 
				 }
	
	

 }


?>