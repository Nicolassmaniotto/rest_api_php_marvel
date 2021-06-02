<?php

$servername = "localhost";
$database = "mdb";
$username = "root";
$password = "roottoor";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($servername, $username, $password, $database);
 


?>
