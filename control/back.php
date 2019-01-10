<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/uniform.css" />
<link rel="stylesheet" href="css/select2.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<div id="header">
  <h1 style="color:white;"><a href="dashboard.html">Control Panel</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->

<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text" style="font-size: 15px; font-weight: bold;">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="login.html" style="font-size: 15px; font-weight: bold;"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->


<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>Dashboard</a>
  <ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
  </ul>
</div>
<!--sidebar-menu-->


			<?php
			    include "dbConnect.php";
				
				
				echo '<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom" style="font-size: 15px; font-weight: bold;"><i class="icon-home"></i> Home</a> <a href="#" style="font-size: 15px; font-weight: bold;">Registration</a> </div>
    <h1>Audit Trail</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Backup</h5>
          </div>
          <div class="widget-content nopadding">
         <form class="form-horizontal" method="get" action="" name="basic_validate" id="basic_validate" novalidate="novalidate">
              <div class="control-group">
              
              </div>
       
              <div class="form-actions">
                <button style="margin-left:180px; margin-bottom:20px; button-size:200px;" type="submit" name="he" class="btn btn-success">Show Details</button>
              </div>
            </form>
          </div>
        </div>';
		
				if(isset($_GET['he'])){
					
					$key = '1235';
					
					
					$sql_query1 = "select data from temp3;";
					$result1 = mysqli_query($con,$sql_query1);
					
					
					while($row = mysqli_fetch_array($result1)) 
						 
					 {  
					 
							$data=$row["data"];	
				
					 }
					
					//$data='5';
					$sql_query = "select name,nid,reg,matched,address,age,time,img, AES_DECRYPT(serial,'$key') as serial1 from temp where nid like '$data';";
					
					$result = mysqli_query($con,$sql_query);
					
					//echo "$sql_query[7]";
					
					while($row = mysqli_fetch_array($result)) 
						 
					 {  
					 
					 $name=$row["name"];	
					 $nid=$row["nid"];
					 $serial=$row["serial1"];
					 $reg=$row["reg"];
					 $matched=$row["matched"];
					 $add=$row["address"];
					 $age=$row["age"];
					 $img=$row["img"];
					 $time=$row["time"];
					 }
					 if($matched==0)
						 $h="This user can vote now";
					 else if ($matched==1)
						 $h="User has already given vote!!!";
					 else
						 $h="User is not verified!!!";
					 
					 	
						echo '
				<h4>Voter Name: '.$name.'</h4>
				<h4>NID: '.$nid.'</h4>
				<h4>Vote Given to Candidate ID: '.$serial.'</h4>
				<h4>Vote Given Time: '.$time.'</h4>
				<h4 style="color:#FE2E64;">'.$h.'</h4>
				<img src='.$img.' alt=""/ style="width: 150px; height: 120px; margin-left:340px; margin-top: -120px;">
				</div>
				</div>
				
					';}

			

				
			?>





</div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2017 &copy; BEVM by <a href="http://themedesigner.in">group 3</a> </div>
</div>
<!--end-Footer-part-->
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.form_validation.js"></script>
</body>
</html>
