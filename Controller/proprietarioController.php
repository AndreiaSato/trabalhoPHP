<?php
 include_once "../Dao/proprietarioDao.php";
 include_once "../Model/Proprietario.php";

 $proprietarioDao = new proprietarioDao();
 $proprietario = new Proprietario();

 if(isset($_POST['login'])){
    $proprietario->setCpf($_POST['cpf']);
    $proprietario->setNome($_POST['nome']);
    $proprietario->setEmail($_POST['email']);
    $proprietario->setTelefone($_POST['telefone']);
    $proprietario->setSenha($_POST['senha']);
    $proprietarioDao->inserir($proprietario);
    header("Location:../View/login.php");
 }
?>