<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="./assets/styles/regester.css"> 

</head>
<body>
<?php
require 'nav3.php';?>
<div class="container">
  <div class="row">
<form action="regesterphp.php" method="post" class="d-flex">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" value="John">
  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname" value="Doe">
  <label for="phone">Phone Number:</label>
 <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>    
  <label for="pwd">Password:</label>
  <input type="password" id="pwd" name="pwd">
  <label for="pwd">confirm_password</label>
  <input type="password" id="testpwd" name="testpwd"><br>
  <input type="submit" value="submit" class="btn btn-outline-primary btnhover">
</form> </div>
</div>
<?php require 'footer.php';?>
</body>
</html>
