<?php

include 'Data.php';

$minhaData = new Data(31,5,2024);
$minhaData->exibirData();
echo "<br>";
echo $minhaData->avancarManual();
echo "<br>";
$minhaData->avancarData();