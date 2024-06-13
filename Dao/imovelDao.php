<?php
include_once 'conectaBanco.php';
class imovelDao{
    public function endereco ( Endereco $endereco){
        try{
            $sql = "INSERT INTO endereco (cidade, estado, rua, numero, complemento, bairro,
            cep) VALUES(:cidade, :estado, :rua, :numero, :complemento, :bairro, :cep)";
            $conn = conectaBanco::getConnection()->prepare($sql);
            $conn-> bindValue(":cidade", $endereco->getCidade());
            $conn-> bindValue(":estado", $endereco->getEstado());
            $conn-> bindValue(":rua", $endereco->getRua());
            $conn-> bindValue(":numero", $endereco->getNumero());
            $conn-> bindValue(":complemento", $endereco->getComplemento());
            $conn-> bindValue(":bairro", $endereco->getBairro());
            $conn-> bindValue(":cep", $endereco->getCep());
            $conn-> execute();
            $sql2= "SELECT id FROM endereco ORDER BY id DESC LIMIT 1";
            $conn2 = conectaBanco::getConnection()->prepare($sql2);
            $conn2-> execute();
            $id = $conn2->fetch(PDO::FETCH_ASSOC);
            return $id['id'];
        }catch(Exception $ex){
            echo "<p> erro ao inserir estudante</p> $ex";
        }
    }
     public function imovel (Imovel $imovel){
        try{

         $sql = "INSERT INTO imovel (tipo, valor, contrato, descricao, situacao,
         proprietario_id, endereco_id) VALUES(:tipo, :valor, :contrato, :descricao, :situacao,
         :proprietario_id, :endereco_id)";
         $conn =conectaBanco::getConnection()->prepare(($sql));
         $conn-> bindValue(":tipo", $imovel->getTipo());
         $conn-> bindValue(":valor", $imovel->getValor());
         $conn-> bindValue(":contrato", $imovel->getContrato());
         $conn-> bindValue(":descricao", $imovel->getDescricao());
         $conn-> bindValue(":situacao", 'disponivel');
         $conn-> bindValue(":proprietario_id",$imovel->getProprietario());
         $conn-> bindValue(":endereco_id", $imovel->getEndereco());
         $conn-> execute();
         }catch(Exception $ex){
            echo "<p> erro ao inserir estudante</p> $ex";
        }
        }


}
