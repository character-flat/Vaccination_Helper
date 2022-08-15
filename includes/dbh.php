<?php

$dbServername = "lin-7068-4824-mysql-primary.servers.linodedb.net";
$dbUsername = "linroot";
$dbPassword = "E6q8TcUJp4MO-czv";
$dbName = "vaccportal";
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
