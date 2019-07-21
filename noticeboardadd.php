<?php
include("design.php");
?>


<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'links.php'?>
</head>
<body>

	<form action="noticephp.php" method="post">
	<div class="container center-div shadow">

<form action="noticephp.php" method="POST">
   		 <center><b>INPUT NOTICE</b></center>
			
	        <div class="form-group">
	        	<input type="text" name="uname" value="" class="form-control" placeholder="University Name:">
	        </div><br>

	        <div class="form-group">
	        	<input type="text" name="subject" value="" class="form-control" placeholder="Subject:">
	        </div>
	        <div class="form-group" >
	        	Date :<br>
	         	<input type="Date" name="date" value="" class="" placeholder="Admission Date:" >
	        </div>
	        
	        <div class="form-group">
	        	<input type="varchar" name="link" value="" class="form-control" placeholder="Link:">
	        </div>
	        
              <br>

			<input type="submit" name="submit2" class="btn btn-danger" value="Add">
   			<a href = "logout.php"class="btn btn-danger">Logout</a>
           </form>

		</div>

	</body>


</html>