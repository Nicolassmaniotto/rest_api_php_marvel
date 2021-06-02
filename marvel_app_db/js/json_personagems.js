// funcao de contrução dos personagmes
function js_personagem_conteudo(data,pos){
    //percorre ate o item character do json
    let $json_result = data.character; 

    //limpa o componete html
    document.getElementById(pos).innerHTML = "" ;
    //percorre os itens character
    $json_result.forEach(element => {
        //id do personagems
        let id = element.id_marvel ;

        //construçoes dos items
        document.getElementById(pos).innerHTML += 
        `<div name="div_${id}" id="div_${id}" class="personagems">
            <button class="personagems" name="button_${id}" id="button_${id}" onclick="chamada_json_comics(${id})">
                <img src="${element.thumbnail}" class="img_person"/>
                <h1> ${element.name} </h1>
                <br> ${element.description}
            </button>
            <br>
            <button class="button_hidden" onclick="f_hidden('conteudo_${id}')">
                HIDDEN  COMICS:   ${element.name} 
            </button>
            <div id='conteudo_${id}' class='conteudo_comic'>
            </div>
         </div>`;



    });
    

}