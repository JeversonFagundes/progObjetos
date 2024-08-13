<?php

class Livro
{

    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;

    public function __construct($titulo, $autor, $anoPublicacao)
    {

        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = true;
    }
    public function emprestar()
    {
        //Método que marca o livro como não disponível (false), caso esteja disponível.

        if ($this->disponivel == true) {
            
            $this->disponivel = false;

            echo "O '$this->titulo' foi emprestado.<br><br>";
        }

    }
    public function devolver() 
    {
        //Método que marca o livro como disponível (true).
        if ($this->disponivel == false) {
            
            $this->disponivel = true;

            echo "O '$this->titulo' foi devolvido.<br><br>";
        }
    }
    public function exibirDetalhes()
    {
        
    }
    public function exibirTitulo() {
        //Método que retorna uma string contendo o título do livro.

        return "O titulo é '$this->titulo'";
    }
}
