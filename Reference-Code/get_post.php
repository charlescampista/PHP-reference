<?php
  // isset verifies if the GET data exists or if it is setted
  if(isset($_GET['name']) AND isset($_GET['email'])){
    // htmlentities is a secure function that blocks script tags passed throughout the form
    $name =  htmlentities($_GET['name']);
    $email = htmlentities($_GET['email']);
    echo $name;
    echo '<br>';
    echo $email;
  }

  if(isset($_POST['name']) AND isset($_POST['email'])){
    // htmlentities is a secure function that blocks script tags passed throughout the form
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    echo $name;
    echo '<br>';
    echo $email;
  }

  if(isset($_REQUEST['postsend'])) {
    $data = htmlentities($_REQUEST['postsend']);
    echo $data;
    echo '<br>';
  }



  if(isset($_REQUEST['getsend'])){
    // htmlentities is a secure function that blocks script tags passed throughout the form
    $data = htmlentities($_REQUEST['getsend']);
    echo $data;
    echo '<br>';
  }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My Website</title>
  </head>
  <body>

    <h1>Get Form</h1>
    <form method="GET" action="get_post.php">
        <div>
          <label>Name</label>
          <br>
          <input type="text" name="name">
        </div>

        <div >
          <label>Email</label>
          <br>
          <input type="text" name="email">
        </div>

        <input type="submit" value="Submit Get">
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h1>Post Form</h1>
    <form method="POST" action="get_post.php">
        <div>
          <label>Name</label>
          <br>
          <input type="text" name="name">
        </div>

        <div >
          <label>Email</label>
          <br>
          <input type="text" name="email">
        </div>

        <input type="submit" value="Submit Post">
    </form>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h1>Request Testing</h1>
    <p>Request can be used to get post a get data a the same time, just change the post or get sintaxe to reques that it works well.</p>
    <form method="POST" action="get_post.php">
        <div>
          <label>Post data to REQUEST</label>
          <br>
          <input type="text" name="postsend">
        </div>
        <input type="submit" value="Post to Request">
    </form>

    <br>
    <br>

    <form method="GET" action="get_post.php">
        <div>
          <label>GET data to REQUEST</label>
          <br>
          <input type="text" name="getsend">
        </div>
        <input type="submit" value="Post to Request">
    </form>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


  </body>
</html>
