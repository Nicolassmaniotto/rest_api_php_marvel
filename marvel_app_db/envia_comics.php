<?php
   
    //cria o objeto de contrução do json
    $obj = (object)[];

    // ponteiro
    $p =0;
    //percorre o json
    foreach($json_results as $data) {
        //pega os valores das variaveis
        $id = $data->id;
        $digitalId = $data->digitalId;
        $title = $data->title;
        $variantDescription = $data->variantDescription;
        $description = $data->description;        
        $resourceURI = $data->resourceURI;
        $thumbnail = $data->thumbnail;
        $thumbnail_img= "$thumbnail->path.$thumbnail->extension";
        $pageCount = $data->pageCount;
        //
        


        // cria o objeto results
        $results = (object)[];
            // alimenta o results com as variaveis
            $results->id = $id;
            $results->digitalId = $digitalId;
            $results->title = $title;
            $results->variantDescription = $variantDescription;
            $results->description = $description;
            $results->thumbnail = $thumbnail_img;
            $results->pageCount = $pageCount;
            //
        // cria um array comic dentro do objeto obj
        // e alimenta ele com o valor de $results
        $obj->comic[$p] =  $results; 

        //INCREMENTA O PONTEIRO
        $p = $p+ 1;
                
    }

    //codifica o obj em json
    $json_encode = json_encode($obj);

    //envia o valor json
    echo $json_encode;
    

?>