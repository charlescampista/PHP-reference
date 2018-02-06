<?php
  echo 'Day - '.date('d'); //Day
  echo '<br>';
  echo 'Month - '.date('m'); //month
  echo '<br>';
  echo 'Year - '.date('Y'); //Year



  echo '<br>';
  echo '<br>';
  echo '<br>';



  echo 'Day of the week -  '.date('l'); //Day of the week


  echo '<br>';
  echo '<br>';
  echo '<br>';



  #DATE FORMATS
  echo date('Y/m/d');
  echo '<br>';
  echo date('m/d/Y');
  echo '<br>';
  echo date('d/m/Y');


  echo '<br>';
  echo '<br>';
  echo '<br>';



  #SETTING THE TIME ZONE
  date_default_timezone_set('America/Sao_Paulo');
  echo 'Getting the time zone - '.date_default_timezone_get(); //Get the current TIME ZONE


  echo '<br>';
  echo '<br>';
  echo '<br>';



  #TIME STUFF
  echo 'Hour - '.date('h');  //Hour
  echo '<br>';
  echo 'Minutes - '.date('i');  //Minutes
  echo '<br>';
  echo 'Seconds - '.date('s');  //Seconds
  echo '<br>';
  echo 'AM/PM - '.date('a');  //AM/PM
  echo '<br>';

  echo 'Time Format - '.date('h:i:sa');



  echo '<br>';
  echo '<br>';
  echo '<br>';

  /*
  miTime is a fuction that carry all the time information for some later use.
  parameters - mKtime(Hour, Minutes, Seconds, Day, Month, Year);
  */

  $timestamp = mktime(12, 5, 50, 7, 9, 1990);
  echo 'using mKtime() to set constant date - '.date('m/d/Y h:i:sa', $timestamp);

  echo '<br>';
  echo '<br>';

  $timestamp2 = strtotime('12:05pm September 07 1990');
  echo 'using strtotime() to conver string date - '.date('m/d/Y h:i:sa', $timestamp2);

  echo '<br>';
  echo '<br>';

  $timestamp3 = strtotime('tomorrow');
  echo 'getting time for tomorrow strtotime(tomorrow)'.date('m/d/Y h:i:sa', $timestamp3);

  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '<br>';

  echo '<h3>Getting days of next week.</h3>';

  echo 'Monday - '.date('m/d/Y h:i:sa', strtotime('next monday') );
  echo '<br>';
  echo 'Tuesday - '.date('m/d/Y h:i:sa', strtotime('next tuesday') );
  echo '<br>';
  echo 'Wednesday - '.date('m/d/Y h:i:sa', strtotime('next wednesday') );
  echo '<br>';
  echo 'Thursdat - '.date('m/d/Y h:i:sa', strtotime('next thursday') );
  echo '<br>';
  echo 'Friday - '.date('m/d/Y h:i:sa', strtotime('next friday') );
  echo '<br>';
  echo 'Saturday - '.date('m/d/Y h:i:sa', strtotime('next saturday') );
  echo '<br>';
  echo 'Sunday - '.date('m/d/Y h:i:sa', strtotime('next sunday') );



  echo '<br>';
  echo '<br>';
  echo '<br>';


  echo '<h3>Getting date with an interval.</h3> (2 from now as example)';
  echo '<br>';
  echo '<br>';

  echo 'Two days from now: strtotime(\'+2 Days\')   - '.date('m/d/Y h:i:sa', strtotime('+2 Days') );
  echo '<br>';
  echo '<br>';
  echo 'Two months from now: strtotime(\'+2 Months\')   - '.date('m/d/Y h:i:sa', strtotime('+2 Months') );
  echo '<br>';
  echo '<br>';
  echo 'Two years from now: strtotime(\'+2 Years\')   - '.date('m/d/Y h:i:sa', strtotime('+2 Years') );
  echo '<br>';
  echo '<br>';








   ?>
