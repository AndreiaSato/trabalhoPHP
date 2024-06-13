<?php
include_once 'conectaBanco.php';
class reservaDao{
    public function inserir(Reserva $reserva){
        try{
            $sql = "INSERT INTO reserva (data_inicial, data_final, situacao, estudante_id, imovel_id)VALUES(:dataInicial,
            :dataFinal, 'true', :estudante_id, :imovel_id)";
            $conn = conectaBanco::getConnection()->prepare($sql);
            $conn-> bindValue(":dataInicial", $reserva->getDataInicial());
            $conn-> bindValue(":dataFinal", $reserva->getDataFinal());
            $conn-> bindValue(":estudante_id", $reserva->getEstudante());
            $conn-> bindValue(":imovel_id", $reserva->getImovel());
            $conn->execute();

            $sql2 = "UPDATE imovel SET situacao = 'indisponivel' WHERE id = :imovel_id";
            $conn = conectaBanco::getConnection()->prepare($sql2);
            $conn-> bindValue(":imovel_id", $reserva->getImovel());
            $conn ->execute();

        }catch(Exception $ex){
        echo "<p> erro ao inserir estudante</p> $ex";
    }
    }
}


?>