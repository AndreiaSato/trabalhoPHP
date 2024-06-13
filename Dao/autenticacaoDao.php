<?php
include_once 'conectaBanco.php';
class autenticacaoDao{
    public function autenticar($email, $senha){
        try{
         $sql = "SELECT * FROM estudante WHERE email = '$email' and senha = '$senha'";
         $conn = conectaBanco::getConnection()->prepare($sql);
         $conn->execute();
         if(!isset($usuario)){
             $sql = "SELECT * FROM proprietario WHERE email = '$email' and senha = '$senha'";
             $conn = conectaBanco::getConnection()->prepare($sql);
             $conn->execute();
             }
            $usuario = $conn->fetch(PDO::FETCH_ASSOC);
         return $usuario;

        }catch (Exception $ex){
            print "<p> erro ao inserir estudante </p> $ex";
        }
    }


 
}
