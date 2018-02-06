<?php







?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cookies Examples</title>
  </head>
  <body>

    <h1>Showing cookies</h1>
    <?php
    setcookie('username', 'Frank', time() + (86400 * 30) );
    if(isset($_COOKIE['username'])){
      echo 'User: '.$_COOKIE['username'] . ' is set<br>';
    } else {
      echo 'User is not set';
    }
    ?>

    <h6>Deleting Cookies...</h6>
    <?php
    // Delete Cookie
    setcookie('username', 'Frank', time() - 3600 ); //Delete cookie setting the time expiration to 1 hour less from now;
    ?>

    <h1>Showing cookies again</h1>
    <p>Here we check the existence first</p>
    <?php
      if(count($_COOKIE) > 0) {
        echo 'There are '.count($_COOKIE).'cookies saved<br>';
      } else {
        echo 'There are no cookies saved<br>';
      }
    ?>
    <br>
    <br>
    <a href="page3.php"> >>> Se how to use cookies with arrays</a>
  </body>
</html>
