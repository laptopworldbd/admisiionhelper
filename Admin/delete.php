<?php 
 
$conn=mysqli_connect("localhost","root","","admissionhelperadmin");

if($_POST) {
    $id = $_POST['id'];
 
    $sql = "DELETE from admininput WHERE id = {$id}";
    if($conn->query($sql) === TRUE) {
        header('Location: editpageadmin.php');
    } else {
         $conn->error;
         header('Location: deletepageadmin.php');
    }
 
    $conn->close();
}
 
?>