<?php 

namespace App\classes;

class PedidoBrinquedos extends Pedido {
 
    private string $nomeSetor;

    public function __construct(){

        $this->nomeSetor = "Brinquedos";
    }

    public function getNomeSetor(): string{

        return $this->nomeSetor;
    }

    public function  calcularFreteComum(): float
    {
        return $this->valor * 0.05;
    }

    public function calcularFreteExpresso(): float
    {
        return $this->valor * 0.1;
    }
 
}