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
    <h1>Voter Registration</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Registration</h5>
          </div>
          <div class="widget-content nopadding">
         <form class="form-horizontal" method="get" action="" name="basic_validate" id="basic_validate" novalidate="novalidate">
              <div class="control-group">
              
              </div>
       
              <div class="form-actions">
                <button style="margin-left:180px; margin-bottom:20px; button-size:200px;" type="submit" name="hello" class="btn btn-success">Register For</button>
              </div>
            </form>
          </div>
        </div>';
		
				if(isset($_GET['hello'])){
					
					
					$sql_query1 = "select data from temp1;";
					$result1 = mysqli_query($con,$sql_query1);
					
				
					while($row = mysqli_fetch_array($result1)) 
						 
					 {  
					 
							$data=$row["data"];	
				
					 }
					

					$sql_query = "select name,nid,reg,address,age,img from temp where nid like '$data';";
					
					$result = mysqli_query($con,$sql_query);
					
				
					while($row = mysqli_fetch_array($result)) 
						 
					 {  
					 
					 $name=$row["name"];	
					 $nid=$row["nid"];
					 $img=$row["img"];
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
				<img src='.$img.' alt=""/ style="width: 150px; height: 120px; margin-left:340px; margin-top: -140px;">
				</div>
				</div>
				
				'; 
				
				//header('Location: http://192.168.0.178/?abcde'.$reg.'z');
				
				
				}

			

				
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
