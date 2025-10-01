<?php

namespace Unimar\TrabalhoGustavo;

class Cliente extends Pessoa{

    private int $id;

    public function __construct(int $idade, string $nome, string $sobrenome, int $id) {      
        parent::__construct($idade, $nome, $sobrenome);
        $this->id = $id;
    }
    public function getId(): int {
        return $this->id;}

    public function mostrarInformacoes(): void {
        echo "Cliente: {$this->nome} {$this->sobrenome}, Idade: {$this->idade}, Email: {$this->id}\n";}
}