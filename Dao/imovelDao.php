<?php
session_start();
include 'conectaBanco.php';
if (isset($_SESSION['cpf'])){
$tipo = $_POST ['tipo'];
$valor = $_POST ['valor'];
$contrato = $_POST ['contrato'];
$descricao = $_POST['descricao'];
$cidade = $_POST ['cidade'];
$estado = $_POST ['estado'];
$rua = $_POST ['rua'];
$numero = $_POST ['numero'];
$complemento = $_POST ['complemento'];
$bairro = $_POST ['bairro'];
$cep = $_POST ['cep'];
$cpf = $_SESSION['cpf']; // criar as variaveis

$sql = "INSERT INTO endereco (cidade, estado, rua, numero, complemento, bairro, cep)
VALUES ('$cidade', '$estado', '$rua', '$numero', '$complemento',' $bairro','$cep')";
$banco->query($sql); // inserir os dados no banco

if($banco->affected_rows >= 1){ // se tiver uma linha ou mais afetada do banco...
    $sql= "SELECT * FROM endereco WHERE cep = '$cep' and numero = '$numero'"; //selecionar o id (procurar pelo cep e numero )
    $endereco = $banco->query($sql); //coloca em uma variavel endereco
    if($row = mysqli_fetch_assoc ($endereco)){
        $endereco = $row ['id']; //armazena o id na variavel
    }
    $sql= "INSERT INTO imovel (tipo, valor, contrato, descricao, situacao, proprietario_id, endereco_id)
     VALUES ('$tipo', '$valor', '$contrato','$descricao', 'disponivel', '$cpf', '$endereco')"; //inserir dados do imovel no banco
    $banco->query($sql);
    header('location: listarImoveis.php');
}

$banco->close();
}
?>