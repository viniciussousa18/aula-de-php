<?php


$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$estado = $_POST["estado"];


$sql = "insert into cliente values(null,'".$nome."','".$email."','".$idade."','"$estado."')";

$con = mysql_connect(*localhost",root","","aula5");

//4- Gravar os dados no banco
//mysqli_query grava numa conexão os dados 
if(mysqli_query($con,$sql)){
  echo"Cliente Cadastro com sucesso!";
 }else{
    echo" Erro ao gravar";
}
mysqli_close($con);
?>