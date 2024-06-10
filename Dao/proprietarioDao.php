<?php
include 'conectaBanco.php';
$nome = $_POST ['nome'];
$cpf = $_POST ['cpf'];
$email = $_POST ['email'];
$telefone = $_POST['telefone'];
$senha = $_POST ['senha'];

$sql = "INSERT INTO proprietario
VALUES ('$cpf', '$nome', '$email', '$telefone',' $senha')";

$banco->query($sql);

if($banco->affected_rows >= 1){
    header('location: login.php');
}

$banco->close();

?>