<?php 
$host="localhost";
$username="root";
$password="";
$dbname="admissionhelperadmin";
$conn=mysqli_connect($host,$username,$password,$dbname);

if(!$conn)
{
	die("connction failed".mysqli_connect_error());
}
else{
	//echo"conncted";
}



?>