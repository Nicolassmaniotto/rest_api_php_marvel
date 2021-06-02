<?php
    //chamada das senhas
    include_once 'conectar.php';
    //

    //ponteiro
     $p =0;

     //percorre o json
    foreach($json_results as $data) {
        //soma o ponteiro
        $p = $p+ 1;
        //

        //pega os valores das posiçoes do json
        $id = $data->id;
        $name = $data->name;
        $description = $data->description;
        $thumbnail = $data->thumbnail;
        $thumbnail_img= "$thumbnail->path.$thumbnail->extension";
        $comics = $data->comics;
        //codifica em json 
        $items = json_encode($comics->items);
        //
        $imagem_not_found = 'http://i.annihil.us/u/prod/marvel/i/mg/b/40/image_not_available.jpg';
        $comics_url =  "https://gateway.marvel.com/v1/public/characters/$id/comics";

            //codigo sql
            $sql = "INSERT INTO
                marvel
            SET
                name ='$name',
            id_marvel ='$id',
            description = '$description',
            thumbnail = '$thumbnail_img',
            items = '$items'
            
            ;";
            //
            //chamada sql   
            if (mysqli_query($conn, $sql)) {
                //sucesso
                echo '<br>success';            
            } else {
                echo '<br>false';
            }

    }
    

?>