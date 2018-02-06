<?php
  if(isset($_POST['submit'])){
    session_start(); //Start the session  YOU NEED TO START BEFORE USE.

    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    header('Location: page2.php');
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="post">
      <input type="text" name="name" placeholder="Enter Name">
      <br>
      <input type="text" name="email" placeholder="Enter Email">
      <br>
      <input type="submit" name="submit" placeholder="Submit">
      <br>
    </form>
  </body>
</html>
