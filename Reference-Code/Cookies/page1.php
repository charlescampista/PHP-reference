<?php
  if(isset($_POST['submit'])){
    $username = htmlentities($_POST['username']);
    setcookie('username', $username,time()+3600);   //key, value, expiration time (here is 1hour)
    header('Location: page2.php');
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Cookies</title>
  </head>
  <body>
    <form class="" action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="post">
      <input type="text" name="username" placeholder="Username">
      <br>
      <input type="submit" name="submit" placeholder="Submit">
      <br>
    </form>
  </body>
</html>
