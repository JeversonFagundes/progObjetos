<?php

include("firma.php");

$firma1 = new Firma("Jeverson", "Fagundes", 1200);

echo "Primeiro nome:" . " " . $firma1->getNome() . "<br><br>";
echo "Sobrenome:" . " " . $firma1->getSobrenome() . "<br><br>";
echo "Salário Mensal:" . " " . $firma1->getSalarioMensal() . "<br><br>";
echo "Salário Anual:" . " " . $firma1->getSalarioAnual() . "<br><br>";
echo "Salário com 10% de aumento:" . " " . $firma1->getAumentoSalario() . "<br><br>";

/*$firma1->setNome("Pablo");
$firma1->setSobrenome("Rios");
$firma1->setSalarioMensal(1000);
 */