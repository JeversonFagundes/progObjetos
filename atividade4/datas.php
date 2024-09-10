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

        if ($dia >= 1 and $dia <= 31) {

            $this->dia = $dia;
        } else {

            echo "Dia é invalido";
        }
    }
    public function pegarDia()
    {

        return $this->dia;
    }
    public function modificarMes($mes)
    {

        if ($mes >= 1 and  $mes <= 12) {

            $this->mes = $mes;
        } else {

            echo "O mês é incorreto";
        }
    }
    public function pegarMes()
    {

        return $this->mes;
    }

    public function modificarAno($ano)
    {
        $this->ano = $ano;
    }
    public function pegarAno()
    {

        return $this->ano;
    }
    public function exibirDataCompleta()
    {

        if ($this->dia == null and $this->mes == null and $this->ano == null) {

            echo "A data está completamente errada!";

            die();
        } else {

            $array = array($this->dia, $this->mes, $this->ano);

            $dataCompleta = implode('/', $array);
        }

        return $dataCompleta;
    }
    public function avancarData($num)
    {

        $diasDoMes = $this->verificaDiasDoMes();

        $dias = $this->dia + $num;

        $this->modificarDia($dias);
    }
    public function verificaDiasDoMes()
    {

        $mes = $this->mes;

        if ($mes == 2) {

            $diasDoMes = 28;
        }

        if ($mes == 4 or $mes == 6 or $mes == 9 or $mes == 11) {

            $diasDoMes = 30;
        }

        if ($mes == 1 or $mes == 3 or $mes == 5 or $mes == 7 or $mes == 8 or $mes == 10 or $mes == 12) {

            $diasDoMes = 31;
        }

        return $diasDoMes;
    }
}
