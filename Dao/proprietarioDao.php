<?php
include 'conectaBanco.php';
class proprietarioDao{
    public function inserir (Proprietario $proprietario){
        try{
            $sql = "INSERT INTO proprietario (nome, cpf, email, telefone, senha)
            VALUES (:nome, :cpf, :email, :telefone, :senha)";
            $conn = conectaBanco::getConnection()->prepare($sql);
            $conn-> bindValue(":nome", $proprietario->getNome());
            $conn-> bindValue(":cpf", $proprietario->getCpf());
            $conn-> bindValue(":email", $proprietario->getEmail());
            $conn-> bindValue(":telefone", $proprietario->getTelefone());
            $conn-> bindValue(":senha", $proprietario->getSenha());
            return $conn->execute();
       } catch(Exception $ex){
        echo "<p> erro ao inserir estudante</p> $ex";
    }
    }
}


?>