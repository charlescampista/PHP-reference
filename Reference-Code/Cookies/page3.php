<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cooking Arrays</title>
  </head>
  <body>
    <h1>Cooking arrays</h1>
    <p>Here we got to serialize the arrays before set them as cookies, you can see we using an associative array to store
    data and then we serialize and pass them to GLOBAL cookie as well.</p>

    <?php
      $user =[
        'name' => 'Joe',
        'email' => 'Joe@email.com',
        'age' => 35
      ];

      $user = serialize($user);
      setcookie('user', $user, time() + (86400 *30));
      $user = unserialize($_COOKIE['user']);

      echo 'name: '.$user['name'];
      echo '<br>';
      echo 'email: '.$user['email'];
    ?>

  </body>
</html>
