<?php
class Estudante{
    private $id;
    private $nome;
    private $cpf;
    private $email;
    private $telefone;
    private $instituicaoEnsino;
    private $senha;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getTelefone(){
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }

    public function getInstituicaoEnsino(){
        return $this->instituicaoEnsino;
    }

    public function setInstituicaoEnsino($instituicaoEnsino){
        $this->instituicaoEnsino = $instituicaoEnsino;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

}

?>