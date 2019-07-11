<?php 
include("design.php");
$conn=mysqli_connect("localhost","root","","admissionhelperadmin");
 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM admininput WHERE id = {$id}";
    $result = $conn->query($sql);
 
    $data = $result->fetch_assoc();
 
    $conn->close();
 
?>
<!DOCTYPE html>
<html>
<head>

	<title>Edit page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<?php include 'links.php'?>
</head>
<body>

	    <form action="update1.php" method="post">
	<div class="container center-div shadow">

   		<div class="Heading text-center text-uppercase text-white mb-5"><br><br><br><br><br>
  		 <center><b>ADMIN EDIT PAGE</b></center>
			<div class="form-group">         			
				<input type="text" name="uname" class="form-control" value="<?php echo $data['uname'] ?>"/>
			</div>
			<div class="form-group">
			         			
				<input type="text" name="selectuni" class="form-control" value="<?php echo $data['selectuni'] ?>"/>	
			

	        <div class="form-group">
	        	<input type="text" name="sub" value="<?php echo $data['sub'] ?>" class="form-control" placeholder="Subject :">
	        </div>

	        <div class="form-group">
	        	Exam Time<br>
	        	<input type="Time" name="time1" value="<?php echo $data['time1'] ?>" placeholder="Exam time :" >
	        </div>
	        
	        <div class="form-group">
	         	<input type="text" name="location1" value="<?php echo $data['location1'] ?>" class="form-control" placeholder="Exam Location :" >
	        </div>
	        
	        <div class="form-group" >
	        	Admission Date :<br>
	         	<input type="Date" name="date1" value="<?php echo $data['date1'] ?>" class="" placeholder="Admission Date :" >
	        </div>
	        
	        <div class="form-group">
	        	<input type="text" name="regfee1" value="<?php echo $data['regfee1'] ?>" class="form-control" placeholder="Registration fee :">
	        </div>

				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><button type="submit">Save Changes</button></td>
                <td><a href="index.php"><button type="button">Back</button></a></td>
   			<!-- <input type="submit" name="submit1" class="btn btn-danger">
   			<a href = "logout.php"class="btn btn-danger">Logout</a>
   			<a href = "noticeboardadd.php"class="btn btn-danger">Input Notice</a> -->
                 
</form>
		</div>

	</body>


</html>
<?php
}
?>