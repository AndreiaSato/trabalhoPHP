<?php
class Reserva{
    private $id;
    private $dataInicial;
    private $dataFinal;
    private $situacao;
    private $estudante;
    private $imovel;

    public function __construct($id, $dataInicial, $dataFinal, $situacao){
        $this->id = $id;
        $this->dataInicial = $dataInicial;
        $this->dataFinal = $dataFinal;
        $this->situacao = $situacao;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getDataInicial(){
        return $this->dataInicial;
    }

    public function setDataInicial($dataInicial){
        $this->dataInicial = $dataInicial;
    }

    public function getDataFinal(){
        return $this->dataFinal; 
    }

    public function setDataFinal($dataFinal){
        $this->dataFinal = $dataFinal;
    }
    public function getSituacao(){
        return $this->situacao;
    }
    public function setSituacao($situacao){
        return $this-> $situacao;
    }
    public function getEstudante(){
        return $this->estudante;
    }

    public function setEstudante($estudante){
        $this->estudante = $estudante;
    }

    public function getImovel(){
        return $this->imovel;
    }

    public function setImovel($imovel){
        $this->imovel = $imovel;
    }

    

    
        
    }

?>