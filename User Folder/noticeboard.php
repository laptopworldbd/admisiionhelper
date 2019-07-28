<?php
include("design.php");
$conn=mysqli_connect("localhost","root","","admissionhelperadmin");
if(isset($_POST['search'])) {
  $searchkey = $_POST['search'];
  $sql = "SELECT* FROM noticeboard WHERE uname LIKE '%$searchkey%'";
}else{
  $sql = "SELECT * FROM noticeboard";
  $searchkey = "";
}



?>

<br>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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




<form method="POST" action="search.php">
  <input type="text" name="search" placeholder="Search By University Name..." value="<?php echo $searchkey; ?>"><br>
  <button type="submit" name="submit">Search Now</button>
</form>


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

    </tr>";
      }
    }
    
  ?>
  </tbody>
</table><br>


</body>
</html>
