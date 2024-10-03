<?php

class Pessoa
{

    private $nome;
    private $idade;
    private $sexo;

    public function __construct($nome, $idade, $sexo) {

        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
    }

    public function getNome(){

        return  $this->nome;
    }
    public function getIdade(){
        
       return $this->sexo;
    }
    public function getSexo(){
        
        return $this->idade;
    }
    public function setNome($nome){

        $this->nome = $nome;
    }
    public function setIdade($idade){
        
        $this->idade = $idade;
    }
    public function setSexo($sexo){
        $this->sexo = $sexo;
    }

}
