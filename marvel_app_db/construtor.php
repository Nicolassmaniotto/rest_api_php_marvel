<?php
$pos = 'mariadb';

include_once "$pos/createdatabase.php";
include_once "$pos/conectar.php";
include_once "$pos/createtable.php";
header('Location: ./connect3.php')



?>