<?php

class Contador{

    private $valorContador;

    public function zerar() {

    }
    public function incrementar() {

    }
    public function setarValorNoContador($v) {

        $this->valorContador = $v;
    }
    public function getContador() {

        return $this->valorContador;
    }
}

$contador1 = new Contador;

$contador1->setarValorNoContador(10);

echo "O valor do contador é:" . " " . $contador1->getContador();


?>

