<?php

require_once "contador.php";

$contador1 = new Contador;

$contador1->setarValorNoContador(20);

echo "O valor do contador é:" . " " . $contador1->getContador() . "<br><br>";

?>


