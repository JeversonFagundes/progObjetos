<?php

class Data{

    private $dia, $mes, $ano;

    function __construct($d,$m,$a){
        $this->setDia($d);
        $this->setMes($m);
        $this->setAno($a);
    }
    
    function setDia($d){
        if($d >= 1 and $d <= 31){
            $this->dia = $d;
        } else {
            echo 'Dia Inválido!';
        }
    }

    function setMes($m){
        if($m >= 1 and $m <= 12){
            $this->mes = $m;
        } else {
            echo 'Mês Inválido!';
        }
    }

    function setAno($a){
        $this->ano = $a;
    }

    function getDia(){
        return $this->dia;
    }

    function getMes(){
        return $this->mes;
    }

    function getAno(){
        return $this->ano;
    }

    function exibirData(){
        //echo $this->getDia().'/'.$this->getMes().'/'.$this->getAno();
        echo $this->dia.'/'.$this->mes.'/'.$this->ano;
    }

    function avancarManual()
    {
        $d = $this->getDia();
        $m = $this->getMes();
        $a = $this->getAno();

        switch ($d) {

            case 31: // Meses com 31 dias
                if ($m == 12) { // se for o último dia do ano
                    $d = 1;
                    $m = 1;
                    $a++;
                } else {
                    $d = 1;
                    $m++;
                }
                break;

            case 30: // Meses com 30 dias
                if ($m == 4 or $m == 6 or $m == 9 or $m == 11) {
                    $d = 1;
                    $m++;
                } else {
                    $d++;
                }
                break;

            default:
                if ($m == 2) { // Fevereiro

                    if ($d == 28 or $d == 29) {

                        if ($d == 28 and $a % 4 == 0) // ano bissexto
                            $d++;
                        else {
                            $d = 1;
                            $m++;
                        }
                    } else {
                        $d++;
                    }

                } else {
                    $d++;
                }
        }

        return "$d/$m/$a";
    }

    function avancarData(){
        $d = $this->getDia();
        $m = $this->getMes();
        $a = $this->getAno();

        $data = new DateTime(); // Cria um novo objeto do tipo DateTime()
        $data->setDate($a,$m,$d); // Define uma data para o objeto
        $data->add(new DateInterval('P1D')); // Adiciona um intervalo P = período D = dia M = mês Y = ano
        echo $data->format('d/m/Y'); // Exibe a data no formato dia/mês/ano
    }

}