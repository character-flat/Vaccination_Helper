<?php
include_once 'includes/dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>portal</title>
  <link rel="stylesheet" href="stylemain.css">
</head>
<body>
<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = mysqli_real_escape_string($conn, $_POST['nlog']);
    if (empty($_POST['nlog'])) {
      $errors['nlog'] = 'Name required';
    }
    $mobil = mysqli_real_escape_string($conn,$_POST['plog']);
    if (empty($_POST['plog'])) {
      $errors['plog'] = 'Mobile Number required';
    }
    $empcheck = "SELECT EXISTS(SELECT * FROM users WHERE name = '$name' AND mobil = '$mobil')";
    $result = mysqli_query($conn, $empcheck);
    $row = mysqli_fetch_row($result);
    if (!$row[0]) {
      header("Location: signup.php");
    }
  
    $sql = "SELECT * FROM users;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        if($row['name'] == $name && $row['mobil'] == $mobil){
          $pname =$row['name'];
          $pmobile=$row['mobil'];
          $page=$row['age'];
          $pdob=$row['dob'];
          $pid=$row['id'];
          $ploc=$row['loc'];
          $pgender = $row['gender'];
          $pdose = $row['dose'];
        }
      }
    }
  }

?>

<h1 class="welcome" >Welcome <?php echo $pname; ?></h1>
<h2>Your Details</h2>
<div class="container">
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>I.D. Number</th>
        <th>Mobile Number</th>
        <th>Age</th>
        <th>Location</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $pname;?></td>
        <td><?php echo $pid;?></td>
        <td><?php echo $pmobile;?></td>
        <td><?php echo $page;?></td>
        <td><?php echo $ploc;?></td>
      </tr>
    </tbody>
  </table>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
session_start();
$_SESSION['varTrans'] = $ploc;
?>
<h2 href="dose.php">Get your Dose <?php echo $pdose;?> of covid vaccine <a href="dose.php">here</a></h2>

</body>
</html>