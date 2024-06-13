<?php
session_start();
 include_once "../Dao/autenticacaoDao.php";

 $autentica = new autenticacaoDao();

 if(isset($_POST["email"])){
    $usuario = $autentica->autenticar($_POST['email'], $_POST['senha']);
    $_SESSION ['cpf']=$usuario['cpf'];
                $_SESSION ['nome']=$usuario['nome'];
                $_SESSION ['email']=$usuario['email'];
                $_SESSION ['telefone']=$usuario['telefone'];
                if(isset($usuario['instituicao_ensino'])){
                    $_SESSION ['instituicao_ensino']=$usuario['instituicao_ensino'];
                }
                header ('location:../View/index.php');
 }


?>