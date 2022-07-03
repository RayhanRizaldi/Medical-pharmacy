<?php

    $host = 'localhost';
    $port = '8080';
    $username = 'postgres';
    $password = '12345';
    $dbname = 'obat';
    $connection_string = "host={$host} port={$port} dbname={$dbname} user={$username} password={$password}";

    $conn = pg_connect($connection_string);

    if (!$conn) {
        echo "<marquee>Not connected to db</marquee> \n";
    }
?>