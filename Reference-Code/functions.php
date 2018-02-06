<?php
  #FUNCTION = block of code that can be repeatedly called.
  /*
    Camel Case - myFunction();
    Lower Case - my_function();
    Pascal Case - MyFunction();
  */

  //create function
  function simpleFunction(){
    echo 'Hello World <br>';
  }
  //called function
  simpleFunction();


  function sayHello($name){
    echo "Hello $name <br>";
  }
  sayHello('Joe');


  function addNumbers($num1, $num2){
    return $num1+$num2;
  }
  echo addNumbers(5,2) . '<br>';
 ?>
