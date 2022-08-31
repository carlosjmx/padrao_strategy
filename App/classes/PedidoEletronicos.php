<?php 

namespace App\classes;

use Exception;

class PedidoEletronicos extends Pedido {
 
    private string $nomeSetor;

    public function __construct(){

        $this->nomeSetor = "Eletrônicos";
    }

    public function getNomeSetor(): string{

        return $this->nomeSetor;
    }

    public function  calcularFreteComum(): float
    {
        return $this->valor * 0.1;
    }

    public function calcularFreteExpresso(): float
    {      
        throw new \Exception('Indisponível');
    }
 
}