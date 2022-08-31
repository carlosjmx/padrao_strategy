<?php 

require_once  __DIR__.'/vendor/autoload.php';

use App\classes\FreteComum;
use App\classes\FreteExpresso;
use App\classes\PedidoBrinquedos;
use App\classes\PedidoEletronicos;

$freteComum = new FreteComum();
$freteExpresso = new FreteExpresso();

$pedidoEletronico = new PedidoEletronicos();

$pedidoEletronico->setValor(100);
$pedidoEletronico->setTipoFrete($freteComum);

echo "Produto : ". $pedidoEletronico->getNomeSetor(). " Frete comum: R$ ".$pedidoEletronico->calculaFrete()."<br>";

$pedidoEletronico->setTipoFrete($freteExpresso);
echo "Produto : ". $pedidoEletronico->getNomeSetor()." Frete expresso R$ ".$pedidoEletronico->calculaFrete()."<br>";

$pedidoBrinquedo = new PedidoBrinquedos();
$pedidoBrinquedo->setValor(200);
$pedidoBrinquedo->setTipoFrete($freteExpresso);

echo "Produto : ".$pedidoBrinquedo->getNomeSetor(). " - Frete expresso R$ ".$pedidoBrinquedo->calculaFrete();
 
    
 
