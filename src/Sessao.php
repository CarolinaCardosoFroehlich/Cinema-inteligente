<?php

namespace Unimar\TrabalhoGustavo;
use Unimar\TrabalhoGustavo\Cliente;
use Unimar\TrabalhoGustavo\Filme;

class Sessao{
    private Filme $filme;

    private int $sala;

    private string $horario;

    private array $clientes = [];
    public function __construct(Filme $filme, int $sala, string $horario, array $clientes) {
        $this->filme = $filme;
        $this->sala = $sala;
        $this->horario = $horario;
        $this->clientes = $clientes;
    }
    public function getFilme():Filme{
        return $this->filme;
    }
    public function getSala():int{
        return $this->sala;   
    }
    public function getHorario():string{
        return $this->horario;
    }  
    public function adicionarCliente(Cliente $cliente): void{
        $this->clientes[] = $cliente;
        echo "Cliente " . $cliente->getNomeCompleto() . " adicionado.\n"; 
    }
    public function listarClientes(): void {
    echo "Pessoas que vão assistir à esse filme:\n";
    foreach ($this->clientes as $cliente) {
        echo $cliente->getNome() . "\n";
        }
    }
    public function retornarDados(): string {
    return "Sessão: " . $this->filme->getTitulo() . 
           " | Sala: {$this->sala} | Horário: {$this->horario}\n";
    }         
}