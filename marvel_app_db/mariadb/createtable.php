<?php 
include_once './conectar.php';

$createtable = "CREATE TABLE IF NOT EXISTS marvel (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    id_marvel VARCHAR(30) NOT NULL UNIQUE,
    -- reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    thumbnail LONGTEXT NULL,
    description LONGTEXT NULL,
    items LONGTEXT NULL
    )";

$result = mysqli_query($conn, $createtable);
mysqli_close($conn);

var_dump($result);
?>