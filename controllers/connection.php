<?php

    // $host = 'localhost';
    // $username = 'root';
    // $password = '';
    // $db = 'covid19_b56';

    $host = 'remotemysql.com';
    $username = 'TCTYHJWdx4';
    $password = 'yWoiuuOTPI';
    $db = 'TCTYHJWdx4';

    $conn = mysqli_connect($host, $username, $password, $db);

    if(!$conn) {
        die(mysqli_error($conn));
    } 
    // else {
    //     echo 'successfully connected...';
    //     echo '<br>';
    // }



?>