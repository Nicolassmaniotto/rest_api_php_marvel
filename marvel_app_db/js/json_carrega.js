function json_carrega(url) {
    fetch(url)
    .then((resp) => resp.json())
    .then(function(data) {
    return data;
    })

}