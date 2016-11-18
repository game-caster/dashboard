<?php
  include 'connection.php';
  
  $name = $_POST['user'];
  $email = $_POST['mail'];
  $pass = $_POST['pass'];
  $sql = "INSERT into data (fname,email,pass) values('$name','$email','$pass')";
  
  if($_POST['submit']) {
    if(mysqli_query($conn, $sql)) {
      echo "Data Added Successfully!";
    }
    else {
      "OH SHIT! Something went wrong!";
    }
  }
?>
