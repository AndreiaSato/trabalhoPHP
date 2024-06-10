<?php
include_once 'conectaBanco.php';
class estudanteDao{
    public function inserir(Estudante $estudante){
        try{
            $sql = "INSERT INTO estudante (cpf,nome,email,telefone,instituicao_ensino,senha)
            VALUES (:cpf, :nome, :email, :telefone, :inst, :senha)";
            $conn = conectaBanco::getConnection()->prepare($sql);
            $conn-> bindValue(":cpf", $estudante->getCpf());
            $conn-> bindValue(":nome", $estudante->getNome());
            $conn-> bindValue(":email", $estudante->getEmail());
            $conn-> bindValue(":telefone", $estudante->getTelefone());
            $conn-> bindValue(":inst", $estudante->getInstituicaoEnsino());
            $conn-> bindValue(":senha", $estudante->getSenha());
            return $conn-> execute();

        }catch(Exception $ex){
            echo "<p> erro ao inserir estudante</p> $ex";
        }
    }
    
}

?>