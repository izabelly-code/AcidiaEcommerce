
function gravar(){
var objetoForm =document.getElementById("formcadastro");
var dados = new FormData(objetoForm);

fetch("./backphp/cadastro.php",{
    method:"POST",
    body: dados
});
window.location.href="./principal.html";

}