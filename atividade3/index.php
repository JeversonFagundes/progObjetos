<?php

include ('Livro.php');
include ('Biblioteca.php');

//testar as classes.
$biblioteca = new Biblioteca ("Biblioteca IFFAR");
$livro1 = new Livro ("PHP Programando com Orientação a Objetos", "Pablo Dalloglio", 2018);
$livro2 = new Livro ("Algoritimos - Teoria e Prática", "Thomas H. Cormen", 2012);
$livro3 = new Livro ("Entendendo Algoritimos", "Aditya Y. Bhargava", 2017);

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);

echo "<br>Lista de livros na biblioteca: <br>";
$biblioteca->listarLivros();

echo "<br>Empréstimo de livro: <br>";
$biblioteca->emprestarLivro("Algoritimos - Teoria e Prática");
$biblioteca->emprestarLivro("Entendendo Algoritimos");

echo "<br>Lista de livros após empréstimos:<br>";
$biblioteca->listarLivros();

echo "<br>Devolução de livros:<br>";
$biblioteca->devolverLivro("Entendendo Algoritimos");

echo "<br>Lista de livros após devolção:<br>";
$biblioteca->listarLivros();