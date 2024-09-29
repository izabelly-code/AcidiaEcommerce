fetch ("./backphp/carrinho.php",{
    method: "GET"

}).then(async function(resposta){

    var dados= await resposta.json();
    console.log(dados);
    listarProdutos(dados);
})

function listarProdutos(dados){
    for(var i=0;i<dados.length;i++){
        
        document.getElementById("produtos").innerHTML +="<div id='card'>"+dados[i].nome +
        "<br>"+ dados[i].descricao +"<p>R$</p>"+dados[i].preco +"<br>"
        }
}