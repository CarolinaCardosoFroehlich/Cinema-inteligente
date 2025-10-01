<?php

namespace Unimar\TrabalhoGustavo;

class Filme {
    private string $titulo;

    private string $duracao;

    private int $classificacao;
    public function __construct(string $titulo, string $duracao, int $classificacao) {
        $this->titulo = $titulo;
        $this->duracao = $duracao;
        $this->classificacao = $classificacao;
    }
    public function getTitulo():string{
        return $this->titulo;
    }
    public function getDuracao():string{
        return $this->duracao;   
    }
    public function getClassificacao():int{
        return $this->classificacao;
    }   
}