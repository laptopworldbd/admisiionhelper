<?php
include("design.php");
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

<h2>Input Done Successfully</h2>

<table>
  <tr>
    <th>University Name :</th>
    <th> </th>
   
  </tr>
  <tr>
    <td>Unit :</td>
    <td> </td>
    
  </tr>
  <tr>
    <td>Subject :</td>
    <td> </td>
    
  </tr>
  <tr>
    <td>Exam Time :</td>
    <td> </td>
   
  </tr>
  <tr>
    <td>Location :</td>
    <td> </td>
   
  </tr>
  <tr>
    <td>Admission Date :</td>
    <td> </td>
    
  </tr>
  <tr>
    <td>Registration Fee :</td>
    <td> </td>
    
  </tr>
</table><br>
  <a href="editpageadmin.php"> <button>Update</button> </a>
  <label>
  <a href="deletepageadmin.php"><button>Delete</button></a>
  </label>
  <label>
  <a href="adminlogin.php"><button>Log Out</button></a>
  </label>

</body>
</html>
