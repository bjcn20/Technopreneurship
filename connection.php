<?php
/*
    $server = 'sql210.epizy.com';
    $username = 'epiz_32178726';
    $password = 'ArddO6bxdjU3F';
    $database = 'epiz_32178726_educplus';
    */
    
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'educplus';
    
    
    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
?>