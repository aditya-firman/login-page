<?php

$servername = "localhost";
$user = "root";
$password = "";

$db_name = "login_db";

$conn = mysqli_connect($servername, $user, $password, $db_name);

    if (!$conn) {
        echo "Connection Database Failed!";
    }

?>