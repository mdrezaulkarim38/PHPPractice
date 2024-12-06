<?php
$serverName = 'localhost';
$userName = 'root';
$password = '';

$conn = mysqli_connect($serverName, $userName, $password);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo 'Connected Successfull';
}


#mysqli_close($conn);