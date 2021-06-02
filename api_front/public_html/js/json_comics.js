// funcao de construção dos items comic

function js_comics_conteudo(data,pos){
    //percorre ate o item comic do json
    let $json_result = data.comic; 
    //limpa o o component a ser prenchido
    document.getElementById(pos).innerHTML = '';

    //percorre o json
    $json_result.forEach(element => {
        // constroe os items encontrados
        document.getElementById(pos).innerHTML +=
        `   
            <br>
            <button class="button_hidden" onclick="f_hidden('comic_${element.id}')"> HIDDEN:   ${element.title} </button>
            <div  name="comic_${element.id}"id="comic_${element.id}">
                
                <h2>${element.title}</h2>
                <li>${element.variantDescription}</li>
                <li>${element.description}</li>
                <li>${element.pageCount}</li>
                <img src="${element.thumbnail}" name="capa_${element.id}" id="capa_${element.id}" class="img_comic" />
                
            </div>
            <hr>`;
                                                    
    });
    

}