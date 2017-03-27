<?php
  
  setcookie("fname", $_POST['fname'], time() + 20000);
  setcookie("lname", $_POST['lname'], time() + 20000);
  setcookie("email", $_POST['email'], time() + 20000);
  header("Location: welcome.php");
  exit();
     
?>

