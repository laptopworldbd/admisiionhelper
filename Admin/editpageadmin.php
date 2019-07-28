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

<h2>Admin Edit Here :</h2>

<table>
  <thead>
  <tr>
    <th>University Name </th>
    <th>Unit </th>
    <th>Subject </th>
    <th>Exam Time </th>
    <th>Location </th>
    <th>Admission Date</th>
    <th>Registration Fee</th>
    <th>Option</th>
  </tr>
  </thead>
  <tbody>
    <?php
    $sql="SELECT * from admininput ";
    $result=$conn ->query($sql);
    if ($result -> num_rows >0) {
      while ($row=$result ->fetch_assoc()) {
        # code...
        echo "
      <tr>
      <td>".$row['uname']."</td>
      <td>".$row['selectuni']."</td>
      <td>".$row['sub']."</td>
      <td>".$row['time1']."</td>
      <td>".$row['location1']."</td>
      <td>".$row['date1']."</td>
      <td>".$row['regfee1']."</td>
      <td><a href='update.php?id=".$row['id']."'> Update</a>
      <a href='deletepageadmin.php?id=".$row['id']."'> Remove</a>
    </tr>";
      }
    }
    
  ?>
  </tbody>
</table><br>


  <a href="adminlogin.php"><button>Log Out</button></a></td>
  <a href="noticeboardadd.php"><button>Input Notice</button></a></td>

 

</body>
</html>
