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
 
}