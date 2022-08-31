<?php 

require_once  __DIR__.'/vendor/autoload.php';

use App\classes\PedidoBrinquedos;
use App\classes\PedidoEletronicos;

$pedidoEletronico = new PedidoEletronicos();
$pedidoBrinquedo = new PedidoBrinquedos();

$pedidoEletronico->setValor(100);
$pedidoBrinquedo->setValor(200);

echo "Produto : ". $pedidoEletronico->getNomeSetor(). " Frete comum: R$ ".$pedidoEletronico->calcularFreteComum()."<br>";
echo "Produto : ". $pedidoEletronico->getNomeSetor()." Frete expresso R$ ".$pedidoEletronico->calcularFreteExpresso()."<br>";

echo "Produto : ".$pedidoBrinquedo->getNomeSetor(). " - Frete comum: R$ ".$pedidoBrinquedo->calcularFreteComum()."<br>";
echo "Produto : ".$pedidoBrinquedo->getNomeSetor(). " - Frete expresso R$ ".$pedidoBrinquedo->calcularFreteExpresso();
 
    
 
