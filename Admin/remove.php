<?php 
    $conn=mysqli_connect("localhost","root","","admissionhelperadmin");


if($_POST) {
$id=$_POST['id'];

 
    $sql = "DELETE FROM noticeboard WHERE id = {$id}";
    if($conn->query($sql) === TRUE) {
        
        header('Location: allnotice.php');
    } else {
        echo "Erorr while updating record : ". $conn->error;
    }
 
    $conn->close();
 
}
 
?>