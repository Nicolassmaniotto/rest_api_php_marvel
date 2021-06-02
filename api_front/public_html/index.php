<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel - REQ </title>
    <!-- css -->
    <link  rel="stylesheet"  href="css/index.css">
    <link rel="stylesheet" href="css/css_person.css">
    <!--  -->

    <!-- funcoes principais -->
    <script  src='js/json_ fetch.js'></script>
    
    <!-- funcoes de contrução dos items -->
    <script  src='js/json_personagems.js'></script>
    <script  src='js/json_comics.js'></script>
    <!--  -->

</head>

<body>

<!-- div onde o conteudo sera carregado -->
<div name='conteudo' id='conteudo'>

</div>
<script>
     /// endereço do SERVIDOR
    const server = "http://10.0.0.111";

     // endereço do retorno dos personagems
    var conteudo = server+":4445/enviadados.php";
    
     //func (endereço da pagina ,nome do id do div a ser preenchido, função a ser chamada)
    json_fetch(conteudo,'conteudo',js_personagem_conteudo);

    //id passado pelo botao na hora do click
    function chamada_json_comics(id){ 

        // endereço a ser chamado
        let url2 = `${server}:4445/connect_comic.php?id=${id}`; 

        //func(endereço da pagina ,nome do id do div a ser preenchido, função a ser chamada)
        json_fetch(url2,`conteudo_${id}`,js_comics_conteudo); 
    };
    
    //funcao para esconder um item html
    function f_hidden(pos){ 
        //pega o o component HIDDEN do item
        bool = document.getElementById(pos).hidden;
        //inverte o valor do HIDDEN do item
        document.getElementById(pos).hidden = !bool ;
    }


</script>
</body>
</html>