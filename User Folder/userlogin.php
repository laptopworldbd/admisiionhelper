<?php
include("design.php");
?>
<body>
<div>
<h2>User Login</h2>

<form action="ulogin.php" method="post">
 

  <div class="container">

    <input type="text" placeholder="Enter Email" name="email" required><br><br>

    <input type="password" placeholder="Enter Password" name="psw" required><br>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>
  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn"> <a href="userregistration.php">Cancel</a></button>
    <span class="psw">Forgot <a href="userregistration.php">password?</a></span>
  </div>


</div>
</body>
</html>