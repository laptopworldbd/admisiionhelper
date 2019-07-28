<?php
include("design.php");

?>

<head>
<style> 
input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-image: url('searchicon.png');
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}

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
<table>
  <thead>
  <tr>
    <th>University Name </th>
    <th>Subject </th>
    <th>Publish Date </th>
    <th>Link </th>
    
  </tr>
  </thead>
  <tbody>
    <?php
    $conn=mysqli_connect("localhost","root","","admissionhelperadmin");
if(isset($_POST['search'])) {
  $searchkey = $_POST['search'];
  $sql = "SELECT* FROM noticeboard WHERE uname LIKE '%$searchkey%'";
}else{
  $sql = "SELECT * FROM noticeboard";
  $searchkey = "";
}



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

    </tr>";
      }
    }
    
  ?>
  </tbody>
</table><br>
</body>
