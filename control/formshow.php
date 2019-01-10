

<?php
	 include "dbConnect.php";
				
				
				
					
					
					$nid=$_GET["nid"];
					
					//$nid=5;

					//echo "$nid";
					
					$sql_query1 = "select data from temp1;";
					$result1 = mysqli_query($con,$sql_query1);
					
				
					while($row = mysqli_fetch_array($result1)) 
						 
					 {  
					 
							$data=$row["data"];	
				
					 }
					

					$sql_query = "select name,nid,reg,address,age from temp where nid like '$nid';";
					
					$result = mysqli_query($con,$sql_query);
					
				
					while($row = mysqli_fetch_array($result)) 
						 
					 {  
					 
					 $name=$row["name"];	
					 $nid=$row["nid"];
					 $reg=$row["reg"];
					 $add=$row["address"];
					 $age=$row["age"];
					 }
					 
					 if($reg==0)
						 $h="User is not registered yet";
					 else
						 $h="User is already registered !!!!";
						echo '
				<h4>Voter Name: '.$name.'</h4>
				<h4>NID: '.$nid.'</h4>
				<h4>Address: '.$add.'</h4>
				<h4>Age: '.$age.'</h4>
				<h4 style="color:#FE2E64;">'.$h.'</h4>
				</div>
				</div>
				
					';

			

				
			?>



