<?php 
include("design.php");
$conn=mysqli_connect("localhost","root","","admissionhelperadmin");
 
if($_GET['id']) {
    $id = $_GET['id'];
 
    $sql = "SELECT * FROM noticeboard WHERE id = {$id}";
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

	    <form action="remove.php" method="post">
	<div class="container center-div shadow">

   		<div class="Heading text-center text-uppercase text-white mb-5"><br><br><br><br><br>
  		 <center><b>ADMIN EDIT PAGE</b></center>
			<div class="form-group">         			
				<input type="text" name="uname" class="form-control" value="<?php echo $data['uname'] ?>"/>
			</div>
			<div class="form-group">
			         			
				<input type="text" name="Sbuject"  class="form-control" value="<?php echo $data['Sbuject'] ?>"/>	
			

	        <div class="form-group">
	        	<input type="Date" name="date" value="" class="" value="<?php echo $data['date'] ?>">
	        </div>

	        <div class="form-group">
	        	
	        	<input type="link" name="link"  class="form-control" value="<?php echo $data['link'] ?>" >
	        </div>
	        
				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
                <td><button type="submit">Delete</button></td>
                <td><a href="allnotice.php"><button type="button">Back</button></a></td>
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