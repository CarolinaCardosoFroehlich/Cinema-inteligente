<?php
//classe abstrata
namespace Unimar\TrabalhoGustavo;

abstract class Pessoa {
    protected int $idade;
    protected string $nome;
    protected string $sobrenome;

    public function __construct(int $idade, string $nome, string $sobrenome) {
        $this->idade = $idade;
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }
    public function getIdade():int{
        return $this->idade;
    }
    public function getNomeCompleto():string{
        return "$this->nome $this->sobrenome";   
    }

    abstract public function mostrarInformacoes(): void; 
}