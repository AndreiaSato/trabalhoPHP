<?php
session_start();
include_once "../Dao/imovelDao.php";
include_once "../Model/Imovel.php";
include_once "../Model/Endereco.php";

$imovelDao = new imovelDao();
$imovel = new Imovel();
$endereco = new Endereco();

if(isset($_POST['submit'])){
$endereco-> setCidade($_POST['cidade']);
$endereco-> setEstado($_POST['estado']);
$endereco-> setRua($_POST['rua']);
$endereco-> setNumero($_POST['numero']);
$endereco-> setComplemento($_POST['complemento']);
$endereco-> setBairro($_POST['bairro']);
$endereco-> setCep($_POST['cep']);
(int) $id = $imovelDao->endereco($endereco);
$imovel->setEndereco($id);
$imovel->setTipo($_POST['tipo']);
$imovel->setValor($_POST['valor']);
$imovel->setContrato($_POST['contrato']);
$imovel->setDescricao($_POST['descricao']);
$imovel->setProprietario($_SESSION['cpf']);
$imovelDao->imovel($imovel);
}




?>

