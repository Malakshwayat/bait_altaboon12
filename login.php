<html>
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="./assets/styles/login.css">
</head>
<body>
  <?php require 'nav3.php'; ?>

  <div class="container">
    <div class="row ">
    <div class="col-md-6">
    <h1>Welcome! Please log in</h1>
    <form  action="checklogin.php"   method="post" class="d-flex">
    <label for="inputPhone3" class="labelemail" name="phone">Phone Number</label>
    <input type="phone" class="formemail" id="inputPhone3" name="phone">
    <label for="inputPassword3" class="labelemail" name="password">Password</label>
      <input type="password" class="formemail" id="inputPassword3" name="password">
        <button type="submit" class="btn btn-outline-primary">Log in</button>
        <a href="http://localhost/onlinestore/regester.php" target="_blank">register</a>
        </form>
     </div>
  </div></div>
  <?php require 'footer.php';?>

</body>
</html>
