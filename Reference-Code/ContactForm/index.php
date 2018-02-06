<?php
  //Massage vars
  $msg = '';
  $msgClass = '';

  // Check for the submit
  if(filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    if(!empty($email) && !empty($name) && !empty($message)) {
      // Check Email
      if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
        $msg = 'Please use a valid email';
        $msgClass = 'alert-danger';
      } else {
        //PASSED
        $toEmail = 'seuemail@mail.com';
        $subject = 'Your Subject here';
        $body = '<h2>Contact Request</h2>
                 <h4>Name</h4><p>'.$name.'</p>
                 <h4>Email</h4><p>'.$email.'</p>
                 <h4>Massage</h4><p>'.$message.'</p>
                 ';
        // Email Headers
        $headers = "MIME-Version: 1.0"."\r\n";
        $headers .= "Content-Type:text/html;charset=UTF8"."\r\n";
        // Aditional Headers
        $headers .= "From: ".$name."<".$email.">"."\r\n";

        if(mail($toEmail, $subject, $body, $headers)) {
          //Email Sent
          $msg = 'Your email has been sent';
          $msgClass = 'alert-success';
        } else {
          $msg = 'Your email was not been sent';
          $msgClass = 'alert-danger';
        }
      }
    } else {
      $msg = 'Please fill in all the fields';
      $msgClass = 'alert-danger';
    }

  }


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact us</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">

    <style media="screen">
        #staticEmail {
            border: 1px solid #ddd;
        }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search">
          <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <div class="container">
      <?php if($message != ''): ?>
        <div class="alert <?php echo $msgClass; ?>">
          <?php echo $msg; ?>
        </div>
      <?php endif; ?>
      <form method="post" action=" <?php echo $_SERVER['PHP_SELF']; ?> ">
        <fieldset>
          <legend>Legend</legend>
          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
              <input type="text"  name="name" class="form-control-plaintext" id="staticEmail"
              value="<?php echo isset($_POST['name']) ? $name : ''  ?>" >
            </div>
          </div>

          <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="text"  name="email" class="form-control-plaintext" id="staticEmail"
              value="<?php echo isset($_POST['email']) ? $email : ''  ?>">
            </div>
          </div>

          <div class="form-group">
            <label for="exampleTextarea">Massage</label>
            <textarea class="form-control" id="exampleTextarea"  name="message" rows="3">
              <?php echo isset($_POST['name']) ? $name : ''  ?>
            </textarea>
          </div>

          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </fieldset>
    </div>

    </form>


  </body>
</html>
