<?php 

if(isset($_COOKIE["fname"]))
  $fname = $_COOKIE["fname"];
if(isset($_COOKIE["lname"]))
  $lname = $_COOKIE["lname"];
if(isset($_COOKIE["email"]))
  $email = $_COOKIE["email"];
  
?>


<!DOCTYPE html>
<head>
    <title>Cory Cizauskas Quiz 2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<h2 id="banter">Sign up for the Olympics! Enter information below to get Tryout information!</h2>

<?php if(! isset($fname) || ! isset($email)): ?>
    <form action = "register.php"
          method = "POST">

    <b>What is your first name?</b>
    <input type = "text" name = "fname">
    <br /><br />
    <b>What is your last name?</b>
    <input type = "text" name = "lname">
    <br /><br />
    <b>What is your email addr.?</b>
    <input type = "text" name = "email">
    <br /><br />
    <input type = "submit" value = "Submit">
    </form>
    

<?php else: ?>

<h3>Hi, <?php echo($fname); ?>, you recently signed up with the email address: <?php echo($email);?>, thank you!</h3>

<?php endif ?>

<div id="logo"></div>
</body>
</html>
