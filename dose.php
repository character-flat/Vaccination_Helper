<?php
include_once 'includes/dbh.php';
?>

<html>
<head>
  <meta charset="UTF-8">
  <title>portal</title>
  <link rel="stylesheet" href="stylemain.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@1,500;1,700&family=Noto+Serif+HK&display=swap" rel="stylesheet">

</head>
<body>
<div class = "container">
    <h2 class = "h">Vaccination Centres Near You<br></h2>

    <br>
    <br>
    <table>
    <?php
        session_start();
        $location = $_SESSION['varTrans'];
        //include_once 'main.php';
        $sql = "SELECT * FROM vaxdata WHERE location = '$location';";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);     
       
        echo"<thead>";
          echo"<tr>
            <th>Location</th>
            <th>Center Name</th>
            <th>Register</th>
          </tr>
        </thead><tbody>" ;

        if ($resultCheck > 0) {
             while ($row = mysqli_fetch_assoc($result)){
                if($row['Location']){
                    echo "<tr><td>{$row['Location']}<br></td><td>{$row['Centre']}<br></td>";
                    echo "<td><a href='{$row['Register']}'>Click to Create An Appointment</a><br></td></tr>";
                }
            }
        }
        else {
            echo "0 results";
        }
        echo"</tbody>";
    ?>
    </table>
    </div>
</body>
</html>
