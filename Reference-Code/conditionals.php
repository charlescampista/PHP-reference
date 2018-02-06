<?php
  #CONDITIONALS
  /*
    == macth values
    === match data types
    <
    >
    <=
    >=
    !=
    !==
  */

  $num = 5;
  if($num == 5){
    echo '5 passed';
    echo '<br>';
  } else{
    echo 'Did not pass';
  }

  $num2 = '5';
  if($num === 5){
    echo '5 string does not pass' ;
    echo '<br>';
  }


  #LOGICAL OPERATORS
  /*
    and  &&
    or ||
    xor
  */

  if(true AND true){
    echo "AND passed";
    echo '<br>';
  }

  if(true && true){
    echo '&& passed';
    echo '<br>';
  }

  if(true OR false){
    echo 'OR passed';
    echo '<br>';
  }

  if(false || true){
    echo '|| passed';
    echo '<br>';
  }

  if(false XOR true){
    echo 'XOR passed';
    echo '<br>';
  }


  #SWITCH
  $favColor = 'green';

  switch ($favColor) {
    case 'red':
      echo 'Your favorite color is red';
      break;

    case 'blue':
      echo 'Your favorite color is blue';
      break;

    default:
      echo 'Your favorite color is something else';
      break;
  }


 ?>
