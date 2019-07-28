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

	<form action="admininput.php" method="post">
	<div class="container center-div shadow">

   		<div class="Heading text-center text-uppercase text-white mb-5"><br><br><br><br><br><br><br><br>
  		 <center><b>ADMIN INPUT PAGE</b></center>
			<div class="form-group">         			
				<input type="text" name="uname" value="" class="form-control" placeholder="University Name :">

			<div class="form-group">	         			      
				<select name="selectuni" >
					<option>Select Unit :</option>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                    <option value="e">E</option>
                    <option value="f">F</option>
                    <option value="g">G</option>
                    <option value="h">H</option>
                    <option value="a">ক</option>
                    <option value="b">খ</option>
                    <option value="c">গ</option>
                    <option value="d">ঘ</option>
                    <option value="e">ঙ</option>
                    <option value="f">চ</option>
                    <option value="g">ছ</option>
                    <option value="h">জ</option>
                </select>
			</div>

	        <div class="form-group">
	        	<input type="text" name="sub" value="" class="form-control" placeholder="Subject :">
	        </div>

	        <div class="form-group">
	        	Exam Time<br>
	        	<input type="Time" name="time1" value="" placeholder="Exam time :" >
	        </div>
	        
	        <div class="form-group">
	         	<input type="text" name="location1" value="" class="form-control" placeholder="Exam Location :" >
	        </div>
	        
	        <div class="form-group" >
	        	Admission Date :<br>
	         	<input type="Date" name="date1" value="" class="" placeholder="Admission Date :" >
	        </div>
	        
	        <div class="form-group">
	        	<input type="text" name="regfee1" value="" class="form-control" placeholder="Registration fee :">
	        </div>


   			<input type="submit" name="submit1" class="btn btn-success">
   			<a href = "logout.php"class="btn btn-danger">Logout</a><br><br>
   			<a href = "editpageadmin.php"class="btn btn-primary">All University Information</a>
   			<a href = "allnotice.php"class="btn btn-primary">All Notice</a>
   			<a href = "noticeboardadd.php"class="btn btn-primary">Input Notice</a>
                 
</form>
		</div>

	</body>


</html>