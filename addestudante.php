<?php
include 'conectaBanco.php';
if(isset($_POST ['nome']) && isset($_POST ['cpf'])){
$nome = $_POST ['nome'];
$cpf = $_POST ['cpf'];
$email = $_POST ['email'];
$telefone = $_POST['telefone'];
$inst = $_POST ['inst'];
$senha = $_POST ['senha'];

$sql = "INSERT INTO estudante 
VALUES ('$cpf', '$nome', '$email', '$telefone', '$inst',' $senha')";

$banco->query($sql);

if($banco->affected_rows >= 1){
    header('location: login.php');
}

$banco->close();
}
?>