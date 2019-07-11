<?php
//session_start();

$con = mysqli_connect('localhost','root');


$db =mysqli_select_db($con,'admissionhelperadmin' );


//if(isset($_post['submit'])){
	$username = $_POST['user'];
	$password = $_POST['pass'];


    		if($username=="sowvick820@gmail.com" && $password=="anik" ){
    		echo"login successfully";
    		//$_SESSION['user'] = $username;
    		header('location: adminmainpage.php');
    	}else{
    		
    		echo"login failed";
    		header('location:adminlogin.php');
    	}
   // }
?>
     
   



