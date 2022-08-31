<?php 

require_once  __DIR__.'/vendor/autoload.php';
use App\classes\Pedido;

$pedido = new Pedido();

$pedido->setValor(100);

echo "Frete comum: R$ ".$pedido->calcularFreteComum()."<br>";
echo "Frete expresso R$ ".$pedido->calcularFreteExpresso();
 
    
 
