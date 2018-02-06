
<?php





  echo '<h1>Filtering Int</h1>:';
  echo 'line: ('.__LINE__.')<br>';
  $var = 23;
  if(filter_var($var, FILTER_VALIDATE_INT)) {
    echo "It's an integer";
  } else {
    echo "It's not an integer";
  }

  echo '<h1>Sanitize data</h1> ';
  echo '<p>Sanitize strips out every dirty of you data see the example in this code </p>';
  echo 'line: ('.__LINE__.')<br>';
  $var = '33dfaK45fjdksl123fdse6565fdjs6565flasjfl';
  var_dump(filter_var($var,FILTER_SANITIZE_NUMBER_INT));
  echo '<br>';


 ?>

<h1>Check Post</h1>
<?php echo 'line: ('.__LINE__.')<br>'; ?>
<form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="post">
  <input type="text" name="data">
  <button type="submit">Submit</button>
</form>

<?php
// Check post data
if(filter_has_var(INPUT_POST,'data')){
  echo 'Data found';
  echo '<br>';
} else {
  echo 'No Data';
  echo '<br>';
}
 ?>

<h1>Check Email</h1>
<?php echo 'line: ('.__LINE__.')<br>'; ?>
<form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="post">
  <input type="text" name="email">
  <button type="submit">Submit</button>
</form>

<?php
// Check email Data
if(filter_has_var(INPUT_POST,'email')) {
  if(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
    echo 'Email is valid';
    echo '<br>';
  } else {
    echo 'Email is no valid';
    echo '<br>';
  }
}
?>



<h1>Filtering Multiple Data</h1>
<?php echo 'line: ('.__LINE__.')<br>'; ?>
<form action=" <?php echo $_SERVER['PHP_SELF']; ?> " method="post">
  <input type="text" name="data">
  <input type="text" name="data2">
  <button type="submit">Submit</button>
</form>

<?php
// IF THE FILTER DOESN'T MATCH THE DATA WON'T GO THROUG THE FORM
$filters = array(
  "data" => FILTER_VALIDATE_EMAIL,
  "data2" => array(
    "filter" => FILTER_VALIDATE_INT,
    "options" => array(
      "min_range" => 1,
      "max_range" => 100
    )
  )
);

print_r(filter_input_array(INPUT_POST, $filters));
?>
