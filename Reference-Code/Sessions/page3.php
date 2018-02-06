<?php
  session_start();
  print_r($_SESSION);
  //$_SESSION['name'] = 'New replaced name';
  $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not subscribed';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Hello <?php echo $name; ?></h1>
    <h5><?php echo $email ?></h5>
    <a href="page4.php">Clear data page</a>
  </body>
</html>
