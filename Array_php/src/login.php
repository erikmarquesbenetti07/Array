<?php

$quantidadeComb   = $_POST['combustivel_foguete'];
$gasto            = $_POST['quantidade_combustivel'];
$distancia        = 15376;
$historico        = [];

do{
  $historico[$quantidadeComb] = $distancia;

  $distancia            -= 15376;
  $quantidadeComb       -= $gasto;
}while(($quantidadeComb >= 0) && ($distancia != 0));

$historico[$quantidadeComb] = $distancia;

foreach($historico as $combustivel => $distanciaPercorrida) {
  $mensagem   = "Distância percorrida: $distanciaPercorrida Km; Combustível gasto: $combustivel L";
  
  echo '<pre>' . $mensagem . '</pre>';
}


