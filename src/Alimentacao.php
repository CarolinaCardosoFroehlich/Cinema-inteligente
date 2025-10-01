<?php

namespace Unimar\TrabalhoGustavo;

class Alimentacao {

    protected string $comida;

    protected string $bebida;


    public function __construct(string $comida, string $bebida) {
        $this->comida = $comida;
        $this->bebida = $bebida;
    }

    public function getComida():string{
        return $this->comida;
    }

    public function getBebida():string{
        return $this->bebida;   
    }
}
