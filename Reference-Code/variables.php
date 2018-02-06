<?php
  print 'Hello World! (Print) <br>';
  echo 'Hello World (Echo) <br>';  //echo is faster than print

  #VARIABLES
  /*
      -Prefix $
      -Start with a letter or an underscore
      -Only letters, numbers and underscore
      -Case sensitive
  */

  #DATA TYPES
  /*
    Strings
    Integers
    floats
    Booleans
    Arrays
    Objects
    NULL
    Resource
  */
  $output = 'Variable with Dolar<br>';
  $num1 = 4;
  $num2 = 10;
  $sum = $num1+$num2;

  $float1 = 4.4;
  $bool1 = true;

  $string1 = 'Hello';
  $string2 = 'World';
  $greeting = $string1 .' '. $string2;

  echo $greeting2 = 'Massage: $string1 $string2   -  single quotes print variables';
  echo '<br>';
  echo $greeting2 = "Massage: $string1 $string2 - double quotes parse variables";

  //Scapes
  $scape = 'They\'re Here';

  echo $output.'<br>';
  echo $sum;
  echo '<br>';
  echo $greeting;
  echo '<br>';
  echo '$scape - '.$scape." (Double quontes don't need scapes)";



  #CONSTANTS
  define('GREETING', 'Hello Everyone');
  echo '<br>';
  echo GREETING;

 ?>
