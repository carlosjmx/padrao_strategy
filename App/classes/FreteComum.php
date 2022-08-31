<?php 

namespace App\classes;

class FreteComum implements Frete{
 
    public function calcula(float $valorPedido): float
    {
        return $valorPedido * 0.05;
    }
 
}