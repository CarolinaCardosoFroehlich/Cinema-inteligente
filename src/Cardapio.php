<?php

namespace Unimar\TrabalhoGustavo;

class Cardapio {

    protected string $combo;

    protected string $comida;

    protected string $bebida;

    protected string $doce;


    public function __construct(string $combo,string $comida, string $bebida, string $doce) {
        $this->combo = $combo;
        $this->comida = $comida;
        $this->bebida = $bebida;
        $this->doce = $doce;

    }

    public function getCombo():string{
        return $this->combo;
    }
    public function getBebida():string{
        return $this->bebida;
    }
    public function getComida():string{
        return $this->comida;
    }
    public function getDoce():string{
        return $this->doce;
    }
}