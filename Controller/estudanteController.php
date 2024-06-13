<?php
include_once "../Dao/estudanteDao.php";
include_once "../Model/Estudante.php";

$estudanteDao = new estudanteDao();
$estudante = new Estudante();

if(isset($_POST['login'])){
    $estudante->setCpf($_POST['cpf']);
    $estudante->setNome($_POST['nome']);
    $estudante->setEmail($_POST['email']);
    $estudante->setTelefone($_POST['telefone']);
    $estudante->setInstituicaoEnsino($_POST['inst']);
    $estudante->setSenha($_POST['senha']);
    $estudanteDao->inserir($estudante);
    header("Location:../View/login.php");

}


?>