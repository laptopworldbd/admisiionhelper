<?php
session_start();

$con = mysqli_connect('localhost','root');
if($con){

	echo"connection successfully";
} else{
	echo"no connection";
}




?>

<!-- for adding design -->
<?php
include("design.php");
?>
<!-- ================= -->
<!DOCTYPE html>
<html>
<head>
 <style> 
          input[type=text] {
              width: 130px;
              box-sizing: border-box;
              border: 2px solid #ccc;
              border-radius: 4px;
              font-size: 16px;
              background-color: white;
              background-image: url('pass.png');
              background-position: 10px 10px; 
              background-repeat: no-repeat;
              padding: 12px 20px 12px 40px;
              -webkit-transition: width 0.4s ease-in-out;
              transition: width 0.4s ease-in-out;
                }

          input[type=password] {
              width: 130px;
              box-sizing: border-box;
              border: 2px solid #ccc;
              border-radius: 4px;
              font-size: 16px;
              background-color: white;
              background-image: url('pass.png');
              background-position: 10px 10px; 
              background-repeat: no-repeat;
              padding: 12px 20px 12px 40px;
              -webkit-transition: width 0.4s ease-in-out;
              transition: width 0.4s ease-in-out;
                }
          input[type=text]:focus {
              width: 100%;
            }
          input[type=password]:focus {
              width: 100%;
            }
                </style>

	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'links.php' ?>
	
</head>
<body>
<div style="background-color: #808080;">
<header>
	<div class="container center-div shadow " >
	         <div class="heading text-center mb-5 text-uppercase text-white ">ADMIN LOGIN PAGE</div>
	         <div class="container row d-flex flex-row justify-content-center mb-5">
	         	<div class="admin-form shadow p-2">
	         		<form content="width=device-width, initial-scale=1" action="logincheck.php"method="POST">
	         			<div  class="form-group">
	         			<label> Email ID :</label>
	         			<input type="text" name="user" value=""
	         			placeholder="Email Id"><br>

	         			<label>Password :</label>
	         			<input type="password" name="pass" value=""
	         			placeholder="Password">


	         		</div>
                       <input type="submit" class="btn btn-success" name="submit">
	         		</form>
                    </div>
                </div>
            </div>
        </header>
 </div>
</body>	
</html>
<?php

?>