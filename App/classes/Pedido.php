<?php 

namespace App\classes;

abstract class Pedido {
    
    protected float $valor;

    public function getValor(){
        return $this->valor;
    }

    public function setValor(float $valor){
       $this->valor = $valor;
    }

    abstract public function calcularFreteComum(): float;
     
    abstract public function calcularFreteExpresso();
    
}