<?php 
// include_once './conectar.php';

$servername = "localhost";
// $database = "mdb";
$username = "root";
$password = "roottoor";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " );
}

$createtable = "CREATE DATABASE IF NOT EXISTS mdb";

$result = mysqli_query($conn, $createtable);
mysqli_close($conn);

var_dump($result);
?>