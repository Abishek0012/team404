<?php

session_start();

    $servername = "localhost"; 
    $username = "root"; 
    $password = "project0";

    $database = "test";

     // Create a connection 
    $db = mysqli_connect($servername, $username, $password, $database,3307);

    // Code written below is a step taken
    // to check that our Database is 
    // connected properly or not. If our 
    // Database is properly connected we
    // can remove this part from the code 
    // or we can simply make it a comment 
    // for future reference.

    if(!$db) {
        die("Error". mysqli_connect_error()); 
    } 
?>