<?php
class Imovel{
    private $id;
    private $tipo;
    private $valor;
    private $contrato;
    private $descricao;
    private $proprietario;
    private $endereco;
    private $situacao;

    
    public function getProprietario(){
        return $this->proprietario;
    }
    public function setProprietario($proprietario){
        $this->proprietario = $proprietario;
    }

    public function getEndereco(){
        return $this->endereco;
    }
    public function setEndereco($endereco){
        $this-> endereco = $endereco;
    }
    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setValor($valor){
        $this->valor = $valor;
    }

    public function getContrato(){
        return $this->contrato;
    }

    public function setContrato($contrato){
        $this->contrato = $contrato;
    }
    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function getSituacao(){
        return $this->situacao;
    }

    public function setSituacao($situacao){
        $this->situacao = $situacao;
    }

    

   
    
}
?>