function autenticar(){
    var objetoForm =document.getElementById("camposlogin");
    var dados = new FormData(objetoForm);
    
    fetch("./backphp/login.php",{
        method:"POST",
        body: dados
    }).then(async function(resposta){

        var dados= await resposta.json();
        console.log(dados);
        if (dados==0){
            alert("login inválido")
        }
        else{

           window.location.href="./principal.html" 
        }
    })
    


    }
