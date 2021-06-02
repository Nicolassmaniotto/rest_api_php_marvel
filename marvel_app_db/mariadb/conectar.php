<?php
 /* Dados do Banco de Dados a conectar */
 //msqli 20% mais rapido que pdo
$servername = "localhost";
$database = "mdb";
$username = "root";
$password = "roottoor";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " );
}
?>