<?php 
    $conn=mysqli_connect("localhost","root","","admissionhelperadmin");


if($_POST) {
$id = $_POST['id'];
$uname=$_POST['uname'];
$selectuni=$_POST['selectuni'];
$sub=$_POST['sub'];
$time1=$_POST['time1'];
$location1=$_POST['location1'];
$date1=$_POST['date1'];
$regfee1=$_POST['regfee1'];
 
    $sql = "UPDATE admininput SET uname = '$uname', selectuni = '$selectuni', sub = '$sub', time1 = '$time1', location1='$location1', date1='$date1', regfee1='$regfee1' WHERE id = {$id}";
    if($conn->query($sql) === TRUE) {
        
        header('Location: editpageadmin.php');
    } else {
        echo "Erorr while updating record : ". $conn->error;
    }
 
    $conn->close();
 
}
 
?>