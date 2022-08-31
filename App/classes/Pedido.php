<?php 

namespace App\classes;

abstract class Pedido {
    
    protected float $valor;
    protected Frete $tipoFrete;

    public function getValor(){
        return $this->valor;
    }

    public function setValor(float $valor){
       $this->valor = $valor;
    }

    public function setTipoFrete(Frete $frete){
        $this->tipoFrete = $frete;
    }

    public function calculaFrete(){
        return $this->tipoFrete->calcula($this->valor);
    }
    
}