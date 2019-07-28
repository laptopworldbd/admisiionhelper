<?php 
    $conn=mysqli_connect("localhost","root","","admissionhelperadmin");


if($_POST) {
$id=$_POST['id'];
$uname=$_POST['uname'];
$Sbuject=$_POST['Sbuject'];
$date=$_POST['date'];
$link=$_POST['link'];
 
    $sql = "UPDATE noticeboard SET uname = '$uname', Sbuject = '$Sbuject', date = '$date', link = '$link' WHERE id = {$id}";
    if($conn->query($sql) === TRUE) {
        
        header('Location: allnotice.php');
    } else {
        echo "Erorr while updating record : ". $conn->error;
    }
 
    $conn->close();
 
}
 
?>