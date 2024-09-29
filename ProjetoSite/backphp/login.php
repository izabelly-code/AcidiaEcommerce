<?php
include "conexao.php";

$email=$_POST["email"];
$senha=$_POST["senha"];

$result=mysqli_query($con, "SELECT * FROM cliente WHERE email='{$email}' AND senha='{$senha}'");
$row=mysqli_num_rows($result);
echo $row;
$objetoJSON=json_encode($row);

?>