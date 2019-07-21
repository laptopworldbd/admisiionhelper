<?php
$conn=mysqli_connect("localhost","root","","admissionhelperadmin");


$uname=$_POST['uname'];
$selectuni=$_POST['selectuni'];
$sub=$_POST['sub'];
$time1=$_POST['time1'];
$location1=$_POST['location1'];
$date1=$_POST['date1'];
$regfee1=$_POST['regfee1'];

$query="INSERT INTO `admininput` (`uname`, `selectuni`, `sub`, `time1`, `location1`, `date1`, `regfee1`) VALUES ('$uname', '$selectuni', '$sub', '$time1', '$location1', '$date1', '$regfee1')";
mysqli_query($conn,$query);
if ($query==true) {
// 	mysqli_error();
	echo "Inserted";
	header('Location: editpageadmin.php');
	# code...
}
else {

}








?>