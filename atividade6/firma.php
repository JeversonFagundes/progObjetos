<?php

/*Atividade
				
A fim de representar empregados em uma firma, crie uma classe chamada Empregado que inclui as três informações a seguir como atributos:

um primeiro nome
um sobrenome
um salário mensal.

Sua classe deve ter um construtor que inicializa os três atributos. Forneça um método set e get para cada atributo. Se o salário mensal não for positivo, configure-o como 0 (zero). Crie um método que exibe o salário anual e um que dê 10% de aumento no salário.
*/

class Firma
{

    private $primeiroNome;
    private $sobrenome;
    private $salarioMensal;

    public function __construct($nome, $sobrenome, $salarioMensal)
    {

        $this->primeiroNome = $nome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;
    }
    public function getNome()
    {

        return $this->primeiroNome;
    }
    public function getSobrenome()
    {

        return $this->sobrenome;
    }
    public function getSalarioMensal()
    {

        return $this->salarioMensal;
    }
    public function getSalarioAnual()
    {

        return $this->salarioMensal * 12;
    }
    public function getAumentoSalario()
    {

        $salario = $this->salarioMensal * 10 / 100;

        return $this->salarioMensal + $salario;
    }
    public function setNome($nome) {

        if (strlen($nome) == 0) {
            

        }else {
            
            $this->primeiroNome = $nome;
        }
    }
    public function setSobrenome($sobrenome) {

        if (strlen($sobrenome) == 0) {
            

        }else {
            
            $this->sobrenome = $sobrenome;
        }
    }
    public function setSalarioMensal($salario) {

        if ($salario <= 0) {
            
            $this->salarioMensal = 0;
        }else {
            
            $this->salarioMensal = $salario;
        }
    }
}
