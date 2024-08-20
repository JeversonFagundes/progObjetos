<?php

include ("datas.php");

$data1 = new Datas (1, 2, 2024);

/*
$data1->modificarDia();
$data1->modificarMes();
$data1->modificarAno();
*/

echo 'Dia = ' . ' ' . $data1->pegarDia() . '<br><br>';
echo 'Mês = ' . ' '.$data1->pegarMes() . '<br><br>';
echo 'Ano = ' . ' ' . $data1->pegarAno() . '<br><br>';
echo 'Data completa = ' . ' ' .$data1->exibirDataCompleta() . '<br><br>';
