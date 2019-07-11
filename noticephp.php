<?php
$conn=mysqli_connect("localhost","root","","admissionhelperadmin");


$uname=$_POST['uname'];
$subject=$_POST['subject'];
$date=$_POST['date'];
$link=$_POST['link'];

$query="INSERT INTO `noticeboard` (`uname`, `Sbuject`, `date`, `link`) VALUES ('$uname', '$subject', '$date', '$link')";
mysqli_query($conn,$query);
if ($query==true) {
// mysqli_error();
	echo "Inserted";
	header('Location: allnotice.php');
	# code...
}
else {

}

?>