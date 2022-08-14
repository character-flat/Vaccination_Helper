<?php
include_once 'includes/dbh.php';
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="stylelogin.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Login</h2>
  <form id="login-form" action = "main.php" method = "post">
    <p>
    <input type="text" id="name" name="nlog" placeholder="Name" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text" id="phone" name="plog" placeholder="phone number" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="login" value="Login" onclick="window.location.href='main.php';">
    </p>
  </form>
  <div id="create-account-wrap">
    <p>Not Registered? Click here to <a href="signup.php">SignUp</a><p>
  </div><!--create-account-wrap-->
</div><!--login-form-wrap-->
<!-- partial -->
  
</body>
</html>
