
<head>
    <title>Edit USERS</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
</head>


<form action="#" method="post">
    <div class="form-group">
        <label for="upassword"> Edit password </label>
        <?php
        include_once 'config.php';
        global $connection;
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
        if (isset($_GET['edit'])) {
            $userid = $_GET['edit'];
           

            $query = "SELECT * FROM users WHERE userid = $userid";
            $select_id = mysqli_query($connection, $query);

            while ($row = mysqli_fetch_assoc($select_id)) {
                $userid = $row['userid'];
                $username = $row['username'];
                $upassword = $row['upassword'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $email = $row['email'];
                $urole = $row['urole'];

      
        
 ?>
      <input value="<?php  echo $upassword;?>" type="password" class="form-control" placeholder="Enter Username" name="upassword" required>

   

      <div class="form-group">
      <label for="firstname">First Name</label>
      <input  value="<?php echo $firstname;?>" type="text" class="form-control" placeholder="Enter First Name" name="firstname" required>
    </div>


    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input value="<?php echo $lastname;?>"  type="text" class="form-control" placeholder="Enter Last Name" name="lastname" required>
    </div>

    <div class="form-group">
      <label for="email">E-mail</label>
      <input value="<?php echo $email;?>" type="email" id="emaili" class="form-control" placeholder="Enter e-mail" name="email" required>
    </div>

 <?php }} ?>

<?php   //UPDATE QUERY
include_once 'config.php';
global $connection;

if (isset($_POST['submit'])) {
    $upassword = $_POST['upassword'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $upassword = password_hash($upassword, PASSWORD_DEFAULT);
    $query = "UPDATE  users SET upassword = '{$upassword}',firstname = '{$firstname} ', lastname = '{$lastname} ',
    email = '{$email} ', urole = 'user' WHERE userid = {$userid}";
    $update_query = mysqli_query($connection, $query);
  
    if (!$update_query) {
        die("QUERY FAILED" . mysqli_error($connection));
    }
    header("Location: view_all_users.php");
    exit();
}

?>
</div>

<div class="form-group">
    <input calss="btn btn-primary" type="submit" name="submit" value="Update user">
</div>
</form>
