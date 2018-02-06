<?php
  #Arrays - Variables that holds multiple values.
  /*
    -indexed
    -associative
    -multi-dimensional
  */

  #INDEXED ARRAY
  $people = array('Kevin','Jeremy','Sara');
  echo $people[1];

  echo '<br>';
  echo '<br>';
  echo '<br>';

  $ids = array(32, 54, 76);
  echo $ids[2];

  echo '<br>';
  echo '<br>';
  echo '<br>';

  $cars = ['Honda', 'Toyota', 'Ford'];
  $cars[3] = 'Chevy';
  $cars[] = 'BMW';
  echo $cars[4];
  echo '<br>';
  echo count($cars); //Number of elements in array
  echo '<br>';
  print_r($cars); //Print all the array
  echo '<br>';
  var_dump($cars); //Debug for array

  echo '<br>';
  echo '<br>';
  echo '<br>';





  #ASSOCIATIVE ARRAY
  //Array based in key and values

  $people2 = array('Brad' => 35, 'Jose' => 32, 'William' => 28);
  $people2['Charles'] = 27;
  var_dump($people2);
  echo '<br>';
  echo $people2['Brad'];
  echo '<br>';
  $nameIds = [22 => "Brad", 44 => "Jose", 63 => "William"];
  echo $nameIds[22];

  echo '<br>';
  echo '<br>';
  echo '<br>';


  #MULTI-DIMENSIONAL ARRAY
  $cars2 = array(
    array('Honda', 20, 10),
    array('Toyota', 30, 20),
    array('Ford', 23, 12),
  );

  echo $cars2[1][0].' - stocked: '.$cars2[1][1].' - sold: '.$cars2[1][2];
?>
