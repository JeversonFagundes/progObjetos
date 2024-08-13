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
        }

    }
    public function devolver() 
    {
        //Método que marca o livro como disponível (true).
        $this->disponivel = true;
    }
    public function exibirDetalhes()
    {
        // Método que retorna uma string com os detalhes do livro (título, autor, ano de publicação e status de disponibilidade).
        
        return $this->titulo . " " . $this->autor . " " . $this->anoPublicacao . " ". $this->disponivel;
    }
    public function exibirTitulo() {
        //Método que retorna uma string contendo o título do livro.

        return $this->titulo;
    }
}
