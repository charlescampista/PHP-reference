<?php
  #substr() - returns a portion of string.

  $output = substr('Hello', 1); //starts from the letter 2
  echo $output;

  echo '<br>';
  $output2 = substr('Hello', 1,3); //starts from the letter 2 to letter4
  echo $output2;


  echo '<br>';
  $output3 = substr('Hello', -2);
  echo $output3;


  #strlen() - returns the length of a string
  echo '<br>';
  $output4 = strlen('Hello World!');
  echo $output4;


  #strpos() - Finds the position of the first occurence of a sub string
  echo '<br>';
  $output5 = strpos('Hello World!', 'o');
  echo $output5;


  #strrpos() - Finds the position of the last occurence of a sub string
  echo '<br>';
  $output5 = strrpos('Hello World!', 'o');
  echo $output5;

  #trim - Strips whitespace
  echo '<br>';
  $text = 'Hello World                ';
  var_dump($text);

  $trimmed = trim($text);
  var_dump($trimmed);
  echo '<br>';

  #strtoupper - Makes everything uppercase
  $output6 = strtoupper('Hello World');
  echo $output6;
  echo '<br>';

  #strtoupper - Makes everything uppercase
  $output7 = strtolower('Hello World');
  echo $output7;
  echo '<br>';

  #ucwords() - Captalize every word;
  $output8 = ucwords("hello world!");
  echo $output8;
  echo '<br>';

  #str_replace() - Replace all ocurences of a search with a replacement
  $text = 'Hello World!';
  $output9 = str_replace('World', 'Everyone', $text);
  echo $output9;
  echo '<br>';


  #is_string - Check if is_string
  $val = 'Hello';
  $output10 = is_string($val);
  echo $output10;   //It will be printed 1 because $val is a string.
  echo '<br>';

  $val = 26;
  $output10 = is_string($val);
  echo $output10; //It will be printed nothing because $val isn't a string The return is false.
  echo '<br>';

  $values = array(true, false, null, 'abc', 33, '33', 22.4, '22.4', '', ' ', 0, '0');
  foreach($values as $value){
    if(is_string($value)) echo "{$value} is a string <br>";
  }

  echo '<br>';
  echo '<br>';
  echo '<br>';


  #gzcompress - compress a is_string
  $string = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et erat velit. Vestibulum fermentum magna sed lacus mattis, nec egestas libero dignissim. Ut nec sem tincidunt, semper lectus id, tempus nisl. In aliquam suscipit vulputate. Donec quis eros urna. Praesent mattis diam convallis ornare lacinia. Nam vehicula nisl et nulla fringilla rutrum.';
  $compressed = gzcompress($string);
  echo $compressed;

  echo '<br>';
  echo '<br>';
  echo '<br>';
  
  echo gzuncompress($compressed);

 ?>
