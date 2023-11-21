<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Connection failed";
}
