<?php
include_once 'config.php';
include_once 'anavigation.php';
session_start();
    if (isset($_SESSION['urole'])) {
        if( !$_SESSION['urole']=='admin'){
            header('location: welcom.php');
            exit();
        }
    }
    else{
        header('location: login.php');
            exit();
    }
    if (isset($_POST['submit']))
 {
    $name=  $_POST["author"];
    $query = "INSERT INTO authors (name)";
    $query .= "VALUES ('{$name}')";

    if (mysqli_query($connection, $query)) { // regjistrimi i te dhenave ne databaze
    echo "New book recorded successfully" ;
    header  ("Location:/1st_project/authors.php");
    }

    else {
    echo "Error: " . $query . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
}
  //exit("please don\'t hack me");
//echo "Connected successfully";
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style1.css">
<body>
 
  <h2>HTML Forms</h2>

  <form action="/1st_project/authors.php" method="POST">

    Author:<br>
    <input type="text" name="author">
    <br><br>
    <input calss="btn btn-primary" type="submit" name="submit" value="Add author">
  </form>
</body>

</html>