<?php

include_once("pessoa.php");

class Amigo extends Pessoa
{

    private $dataDoAniversario;

    public function __construct($nome, $idade, $sexo)
    {
        parent::__construct($nome, $idade, $sexo);
    }
    public function getdataDoAniversario()
    {

        return $this->dataDoAniversario;
    }
    public function setdataDoAniversario($dataDoAniversario)
    {

        $this->dataDoAniversario = $dataDoAniversario;
    }
}
