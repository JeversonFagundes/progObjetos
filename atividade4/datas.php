<?php

//criar a classe para as datas
class Datas
{

    //atributos da classe
    private $dia;
    private $mes;
    private $ano;

    //criar os métodos da classe
    public function __construct($dia, $mes, $ano)
    {

        $this->modificarDia($dia);
        $this->modificarMes($mes);
        $this->modificarAno($ano);
    }
    public function modificarDia($dia)
    {

        if ($dia <= 0 or $dia > 30) {

            echo "Dia incompativel!";
        } else {

            $this->dia = $dia;
        }
    }
    public function pegarDia()
    {

        return $this->dia;
    }
    public function modificarMes($mes)
    {

        if ($mes <= 0 or $mes > 12) {

            echo "O mês é incompativel";
        } else {

            $this->mes = $mes;
        }
    }
    public function pegarMes()
    {

        return $this->mes;
    }

    public function modificarAno($ano)
    {

        if ($ano <= 0 or $ano > 10000) {

            echo "Ano incompativel";
        } else {

            $this->ano = $ano;
        }
    }
    public function pegarAno()
    {

        return $this->ano;
    }
    public function exibirDataCompleta()
    {

        if ($this->dia == null and $this->mes == null and $this->ano == null) {

            echo "A data está completamente errada!";

            die ();

        } else {

            $array = array($this->dia, $this->mes, $this->ano);

            $dataCompleta = implode('/', $array);
        }

        return $dataCompleta;
    }
    public function avancarData($num)  {

        $dia = $this->dia;
        $mes = $this->mes;
        $ano = $this->ano;

        
    }
}
