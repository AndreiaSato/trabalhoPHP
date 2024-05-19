<?php
session_start();
include 'conectaBanco.php';

$email = $_POST ['email'];
$senha = $_POST ['senha'];

$sql = "SELECT * FROM estudante WHERE email = '$email' ";
$usuario = $banco->query($sql);
if($usuario){
    if($row= mysqli_fetch_assoc ($usuario)){ //se entrando na linha e for diferente de nulo...
        
            if($row['senha'] == $senha){
                $_SESSION ['cpf']=$row['cpf'];
                $_SESSION ['nome']=$row['nome'];
                $_SESSION ['email']=$row['email'];
                $_SESSION ['telefone']=$row['telefone'];
                $_SESSION ['instituicao_ensino']=$row['instituicao_ensino'];
                header ('location:listarImoveis.php');
            }
    }
    else{
        $sql = "SELECT * FROM proprietario WHERE email = '$email' ";
        $usuario = $banco->query($sql);
        if($usuario){
            while($row= mysqli_fetch_assoc ($usuario)){
                if($row['senha'] == $senha){
                    $_SESSION ['cpf']=$row['cpf'];
                    $_SESSION ['nome']=$row['nome'];
                    $_SESSION ['email']=$row['email'];
                    $_SESSION ['telefone']=$row['telefone'];
                    header ('location:imovel.php');
                }
            }
        }
    }
}


$banco->close();
?>