<?php
  #$_SERVER SUPERGLOBAL

  // CREATE SERVER ARRAY
    $server = [
      'Host Server Name' => $_SERVER['SERVER_NAME'],
      'Host Header'  => $_SERVER['HTTP_HOST'],
      'Sever Software'  => $_SERVER['SERVER_SOFTWARE'],
      'Document Root'  => $_SERVER['DOCUMENT_ROOT'],
      'Current Page'  => $_SERVER['PHP_SELF'],
      'Script Name'  => $_SERVER['SCRIPT_NAME'],
      'Absolute Path'  => $_SERVER['SCRIPT_FILENAME'],
    ];

    echo 'Server Name: '.$server['Host Server Name'];
    echo '</br>';
    echo '</br>';
    echo 'Host Name: '.$server['Host Header'];
    echo '</br>';
    echo '</br>';
    echo 'What is runnig currently: '.$server['Sever Software'];
    echo '</br>';
    echo '</br>';
    echo 'Document Root: '.$server['Document Root'];
    echo '</br>';
    echo '</br>';
    echo 'The Current Page: '.$server['Current Page'];
    echo '</br>';
    echo '</br>';
    echo 'File Name: '.$server['Script Name'];
    echo '</br>';
    echo '</br>';
    echo 'Path of file: '.$server['Absolute Path'];


    echo '</br>';
    echo '</br>';
    echo '</br>';
    echo '</br>';


  //CREATE CLIENTE ARRAY
    $client = [
      'Client System Info' => $_SERVER['HTTP_USER_AGENT'],
      'Client IP' => $_SERVER['REMOTE_ADDR'],
      'Remote Port' => $_SERVER['REMOTE_PORT'],
    ];

    echo 'Client System Information: '.$client['Client System Info'];
    echo '</br>';
    echo '</br>';
    echo 'Client IP: '.$client['Client IP'];
    echo '</br>';
    echo '</br>';
    echo 'Used Port Number: '.$client['Remote Port'];
    echo '</br>';
    echo '</br>';


 ?>
