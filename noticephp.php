<?php
$conn=mysqli_connect("localhost","root","","admissionhelperadmin");


$uname=$_POST['uname'];
$subject=$_POST['subject'];
$details=$_POST['details'];
$date=$_POST['date'];
$link=$_POST['link'];

$query="INSERT INTO `noticeboard` (`uname`, `Sbuject`, `details`, `date`, `link`) VALUES ('$uname', '$subject', '$details', '$date', '$link')";
mysqli_query($conn,$query);
if ($query==true) {
// mysqli_error();
	echo "Inserted";
	# code...
}
else {

}

?>