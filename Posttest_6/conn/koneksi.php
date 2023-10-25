<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "remdata_db";

$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Cannot connect to database: " . mysqli_connect_error());
}

?>