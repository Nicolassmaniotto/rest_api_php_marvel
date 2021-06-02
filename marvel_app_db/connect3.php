<?php
include_once './private/senha2.php';
include_once   './in_api/options_get2.php';

$keys = new keys();
$connect = $keys->key();
// echo $connect;// $position = ;
$opGet= new opGet();
$position = $opGet->position('characters');

if(!$_GET['limit']){
    $get_limit= 100;
}else{
    $get_limit= $_GET['limit'];
}
if(!$_GET['offset']){
    $get_offset= 0;
}else{
    $get_offset = $_GET['offset'];
}


$limit = $opGet->limit($get_limit);
$offset = $opGet->offset($get_offset);

// echo "$position";
// echo $limit;
// $limit = limit(6);
// $position = position("characters");
$url = "https://gateway.marvel.com:443/v1/public/$position?$connect$limit$offset";


$content_url = $opGet->get_url($url);

// header('Content-Type: application/json');
$json = json_decode($content_url);
// foreach(){
    
// }
// $results = new (object)[];
$json_data = $json->data;
$json_results = $json_data->results;

// var_dump($json_results);
// echo($results[1]);
// echo get_web_page($url);
include_once './mariadb/add_person.php';
// include_once './user/personagems.php';

?>