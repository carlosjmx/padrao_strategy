<?php 

namespace App\classes;

class PedidoEletronicos extends Pedido {
 
    private string $nomeSetor;

    public function __construct(){

        $this->nomeSetor = "Eletrônicos";
    }

    public function getNomeSetor(): string{

        return $this->nomeSetor;
    }
 
}