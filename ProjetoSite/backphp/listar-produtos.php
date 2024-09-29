<?php
    include "conexao.php";
    $resultado=mysqli_query($con, "SELECT * FROM produto");
    $i=0;
    while($registro=mysqli_fetch_assoc($resultado)){
        $dados[$i]["id_produto"]=$registro["id_produto"];
        $dados[$i]["nome"]=$registro["nome"];
        $dados[$i]["descricao"]=$registro["descricao"];
        $dados[$i]["preco"]=$registro["preco"];
        $i++;

    }
    $objetoJSON=json_encode($dados);
    echo $objetoJSON;
?>