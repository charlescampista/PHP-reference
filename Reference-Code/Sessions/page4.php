<?php
    session_start();

    unset($_SESSION['name']); //Erase session data

    session_destroy(); //Destroy the session

?>
