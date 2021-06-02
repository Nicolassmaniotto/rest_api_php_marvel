<?php
//funcao que envia json
function enviadadosDB_personagems(){
    //conecta com o obj
    include_once 'mariadb/conectar_obj.php';
    //
    //url se a imagem nao existe
    $image_not_found = "http://i.annihil.us/u/prod/marvel/i/mg/b/40/image_not_available.jpg";
    //
    //query sql
    $query = "SELECT * FROM marvel WHERE thumbnail != '$image_not_found' AND description != '' AND items != '' LIMIT 6 OFFSET 0";
    //
    //conecta ao db   
    if ($result = $mysqli->query($query)) {
        //cria o objeto
        $object = (object)[];
        //
        //incremento
        $i = 0;
        //
        //correr o retorno
        while ($obj = mysqli_fetch_object($result)) {
            //adicionar o valor do sql ao object
            $object->character[$i] = $obj;
            //
            //incrementa
            $i++;
            //
        }
        //fecha conexao sql
        $result->close();
        //
    }
    //fecha conexao sql
    $mysqli->close();
    //
    //codifica json
    $json = json_encode($object);
    //
    echo $json ;
}
//header
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
header('Access-Control-Allow-Credentials: true');
//

//chama funcao
enviadadosDB_personagems();
//
?>