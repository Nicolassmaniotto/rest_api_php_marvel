<?php
include_once './private/senha2.php';
include_once   './in_api/options_get2.php';

$keys = new keys();
$connect = $keys->key();
// echo $connect;// $position = ;
$opGet= new opGet();

$id = $_GET['id'];

$comics_url =  "https://gateway.marvel.com/v1/public/characters/$id/comics?$connect";
// echo $comics_url;

$content_url = $opGet->get_url($comics_url);

header('Content-Type: application/json');
$json = json_decode($content_url);
// foreach(){
    
// }
// $results = new (object)[];
$json_data = $json->data;
$json_results = $json_data->results;
// var_dump($json_data);
// echo "<hr/>";

// var_dump($json_results[0]);
// var_dump($json_results);
// echo($results[1]);
// echo get_web_page($url);
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
header('Access-Control-Allow-Credentials: true');
include_once './envia_comics.php';
// include_once './user/personagems.php';

?>