<?php
 $nome=$_POST["nome"];
 $telefone=$_POST["telefone"];
 $endereco=$_POST["endereco"];
 $numero=$_POST["numero"];
 $cpf=$_POST["cpf"];
 $cidade=$_POST["cidade"];
 $estado=$_POST["estado"];
 $data_nasc=$_POST["data_nasc"];
 $email=$_POST["email"];
 $senha=$_POST["senha"];


 include "conexao.php";
 $query="INSERT INTO cliente(cpf,nome,endereco,telefone,numero,cidade,estado,dat_nasc,email,senha) 
 VALUES ('$cpf','$nome','$endereco','$telefone','$numero','$cidade','$estado','$data_nasc','$email','$senha')";
 mysqli_query($con,$query);
 ?>