<?php
  #LOOPS  execute code set number of times
  /*
    for
    while
    do..while
    foreach
  */

  #For loop
  for($i=0; $i<10 ;$i++){
    echo 'For - '.$i;
    echo '<br>';
  }

  $i = 0;
  echo '<br>';
  echo '<br>';
  echo '<br>';

  #While loop
  while($i < 10){
    echo 'While - '.$i;
    $i++;
    echo '<br>';
  }

  $i = 0;
  echo '<br>';
  echo '<br>';
  echo '<br>';



  #Do...While loop
  do{
    echo 'Do While - '.$i;
    echo '<br>';
    $i++;
  }  while($i<10);

  $i = 0;
  echo '<br>';
  echo '<br>';
  echo '<br>';


  #For Each
  $people = array('Brad', 'Jose', 'Willian');
  foreach ($people as $person) {
    echo 'For each Array - '.$person;
    echo '<br>';
  }

  echo '<br>';
  echo '<br>';
  echo '<br>';

  $people2 = array('Brad' => 'brad@gmail.com', 'Jose' => 'jose@gmail', 'Willian' => 'willian@gmail');
  foreach ($people2 as $person => $email) {
    echo 'For each Associative Array - '.$person.': '.$email;
    echo '<br>';
  }

 ?>
