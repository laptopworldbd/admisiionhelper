<?php
$conn=mysqli_connect("localhost","root","","admissionhelperadmin");


$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$password=$_POST['password'];
$c_password=$_POST['c_password'];


$query="INSERT INTO `user` (`name`, `email`, `phone`, `password`, `c_password`) VALUES ('$name', '$email', '$phone', '$password', '$c_password')";
mysqli_query($conn,$query);
if ($query==true) {
 	mysqli_error();
	echo "Inserted";
	header('Location:registrationsuccess.php');
	# code...
}
else {
	mysqli_error();

}








?>