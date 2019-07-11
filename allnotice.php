<?php
include("design.php");
$conn=mysqli_connect("localhost","root","","admissionhelperadmin");
?>

<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Admin Edit Here</h2>

<table>
  <thead>
  <tr>
    <th>University Name </th>
    <th>Subject </th>
    <th>Date </th>
    <th>Link </th>
    <th>Option</th>
  </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * from noticeboard ";
    $result=$conn ->query($sql);
    if ($result -> num_rows >0) {
      while ($row=$result ->fetch_assoc()) {
        # code...
        echo "
      <tr>
      <td>".$row['uname']."</td>
      <td>".$row['Sbuject']."</td>
      <td>".$row['date']."</td>
      <td>".$row['link']."</td>

      <td><a href='noticeupdate.php?id=".$row['id']."'> Update</a>
      <a href='noticedelete.php?id=".$row['id']."'> Remove</a>
      <a href='allnotice.php?id=".$row['id']."'> Save</a>
     
    </tr>";
      }
    }
    
  ?>
  </tbody>
</table><br>


  <a href="adminlogin.php"><button>Log Out</button></a></td>

 

</body>
</html>
