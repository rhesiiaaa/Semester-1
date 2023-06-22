<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db = "todo";

    $connection = mysqli_connect($hostname, $username, $password);

    if(mysqli_connect_errno()) {
        echo "FAILED CONNECTION";
    } else {
        echo "CONNECTION SUCCESSFULL!";
    }
?>