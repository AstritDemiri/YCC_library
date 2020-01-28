<?php
/*connecting with database */

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multi_login";

// Create connection
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
?>
