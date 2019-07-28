<!DOCTYPE html>
<html>
<title>admissionhelper</title>
<body>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

/* Fixed sidenav, full height */
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}


.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}


.main {
  margin-left: 200px; 
  font-size: 20px; 
  padding: 0px 10px;
}


.active {
  background-color: green;
  color: white;
}
.clr{
  background-color: #80aaff;
}


.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}


.fa-caret-down {
  float: right;
  padding-right: 8px;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="sidenav">
    <img src="img/LGO.JPG" alt="Trulli" width="200" height="200"><br><br>
  <a href="index.php">HOME</a><br><br>
  <a href="adminlogin.php">Admin</a>
  <button class="dropdown-btn">My Account  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="userlogin.php">Login</a>
    <a href="userregistration.php">Registration</a>
    
  </div>
  <a href="noticeboard.php">University Information</a>
  <a href="alluniversity.php">All University</a>
  <button class="dropdown-btn">Admission Circular  
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="http://studybarta.com/ranking-science-engineering-universities-bangladesh/">Science And Technology</a>
    <a href="http://studybarta.com/list-of-agricultural-universities-in-bangladesh/">Agriculture</a>
    <a href="http://www.eduicon.com/Institute/More/?page=technical_bsc.php&Degree_Name_ID=13">Engineering</a>
  </div>
<a href="noticeboard.php">About Us</a>
</div>

<div class="main"><div class="clr">
  <center><h2 style="font-family: Georgia, serif ; font-size: 48px;"><b>ADMISSION HELPER</b></h2>
  <b> বিশ্ববিদ্যালয় ভর্তি সহায়িকা </b>
  </center><br>

<marquee behavior="scroll" direction="left"> DU Admission Notice (Dhaka University Admission Test Circular 2019)....Dhaka University Admission Application Form 2019-2020.....Rajshahi University has 52 departments under 10 faculties and affiliated educational institutions 41; Out of which 11 are government and 24 non-governmental candidates.</marquee></div>
<script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 2px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 13%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}


@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

<body>





</body>



</body>
</html>