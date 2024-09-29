<?php
 include "conexao.php";
 $indice=$_POST["indice"];;
 
 mysqli_query($con,"INSERT INTO carrinho(id_produto) VALUES ('$indice')");
 
 $resultado= mysqli_query($con, "SELECT * FROM produto INNER JOIN carrinho WHERE carrinho.id_produto=produto.id_produto");
 $i=0;
 while($registro=mysqli_fetch_assoc($resultado)){
     $dados[$i]["nome"]=$registro["nome"];
     $dados[$i]["descricao"]=$registro["descricao"];
     $dados[$i]["preco"]=$registro["preco"];
        $i++;
     $i++;

 }
 $objetoJSON=json_encode($dados);
 echo $objetoJSON;

?>