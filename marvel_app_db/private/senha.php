<?php
$public_key = "bce7b1e856554ab646ff3497dfed63bf" ;
$private_key = "2a3fc59492db34bc5f6ce9813da14be6e463924a";

$ts = random_int(4,999);
$all_key = $ts.$private_key.$public_key;


$all_sem_espaco = trim ( $all_key, " ");
 
$hashmd5 = md5($all_key);
$hashmd5_sem_espaco = md5($all_sem_espaco);

$connect = "ts=$ts&apikey=$public_key&hash=$hashmd5_sem_espaco";
?>