<?php 
 
$conn=mysqli_connect("localhost","root","","admissionhelperadmin");

if($_POST) {
    $id = $_POST['id'];
 
    $sql = "DELETE from noticeboard WHERE id = {$id}";
    if($conn->query($sql) === TRUE) {
        header('Location: noticeadminremove.php');
    } else {
         $conn->error;
         header('Location: allnotice.php');
    }
 
    $conn->close();
}
 
?>