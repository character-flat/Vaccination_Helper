<?php
include_once 'includes/dbh.php';
?>



<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="stylelsignup.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div id="login-form-wrap">
  <h2>Sign Up</h2>
  <form id="login-form" action = "signup.php" method ="post">
    <p>
    <input type="text"  name="name" placeholder="Name" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text" name="gender" placeholder="gender" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text" name='mobil' placeholder="Mobile Number" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="number"  name='age' placeholder="Age" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="date"  name='dob' placeholder="Date Of Birth" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text" name='id' placeholder="Identification Number" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="text"  name='loc' placeholder="City/Town/Vilage" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="number"  name='dose' placeholder="No. of Dose taken" required><i class="validation"><span></span><span></span></i>
    </p>
    <p>
    <input type="submit" id="signup" value="signup" onclick="window.location.href='regsucess.php';">
    </p>
   
  </form>
  <div id="create-account-wrap">
    <p>Already Registered? <a href="login.php">Login</a><p>
  </div>
  <?php
  
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = mysqli_real_escape_string($conn, $_POST['name']);
      if (empty($_POST['name'])) {
        $errors['name'] = 'Name required';
      }
      $mobil = mysqli_real_escape_string($conn,$_POST['mobil']);
      if (empty($_POST['mobil'])) {
        $errors['mobil'] = 'Mobile Number required';
      }
      $age = mysqli_real_escape_string($conn,$_POST['age']);
      if (empty($_POST['age'])) {
        $errors['age'] = 'age required';
      }
      $dob = mysqli_real_escape_string($conn,$_POST['dob']);
      if (empty($_POST['dob'])){
        $errors['dob']='dob required';
      }
      $id = mysqli_real_escape_string($conn,$_POST['id']);
      if (empty($_POST['id'])){
        $errors['id']='id required';
      }
      $loc = mysqli_real_escape_string($conn,$_POST['loc']);
      if (empty($_POST['loc'])){
        $errors['loc']='loc required';
      }
      $gender = mysqli_real_escape_string($conn,$_POST['gender']);
      if (empty($_POST['gender'])){
        $errors['gender']='gender required';
      }
      $dose = mysqli_real_escape_string($conn,$_POST['dose']);
      if (empty($_POST['dose'])) {
        $errors['dose'] = 'dose required';
      }
      $sql = "INSERT INTO users(name,mobil,age,dob,id,loc,gender,dose) VALUES('$name','$mobil',$age,'$dob',$id,'$loc','$gender',$dose);";
      if(mysqli_query($conn,$sql)){
        header("Location: regsucess.php");
      } else{
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    }
        
   ?>
</div>

</body>
</html>