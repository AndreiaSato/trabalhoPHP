<?php
session_start();
 include_once "../Dao/autenticacaoDao.php";

 $autentica = new autenticacaoDao(); //criei a variável autentica para guardar o objeto autenticaçãoDao

 if(isset($_POST["login"])){
    $usuario = $autentica->autenticar($_POST['email'], $_POST['senha']);//criei a variavel usuário que recebe o retorno da função autenticar do objeto autenticacaoDao
                $_SESSION ['cpf']=$usuario['cpf'];    // |
                $_SESSION ['nome']=$usuario['nome'];  // | atribuição de valores para as variaveis de sessão
                $_SESSION ['email']=$usuario['email']; //| 
                $_SESSION ['telefone']=$usuario['telefone'];
                if(isset($usuario['instituicao_ensino'])){  // caso a instituição de ensino esteja presente no array usuario, é guardada na variavel sessão
                    $_SESSION ['instituicao_ensino']=$usuario['instituicao_ensino'];
                }
                header ('location:../View/index.php'); // direciona para a pagina inicial
 }

?>