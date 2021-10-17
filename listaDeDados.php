<?php 
//Ecercícios práticos arrays, e arrays associativos, strings
//Criar um array comum, trabalhar com for, foreach e adicionar 1 nova posição utilizando a sintaxe do php



$contasCorrentes = [
  'primeiro'=>'c1',
  'segundo'=>'c2',
  'terceiro'=>'c3',
  'quarto'=>'c4',
  'quinto'=>'c5'
];
foreach($contasCorrentes as $key => $i){
  echo $key.' => '.$i.PHP_EOL;
}

 $contasCorrentes['sexto']='c6';

foreach($contasCorrentes as $key => $i){
  echo $key.' => '.$i.PHP_EOL;
}

?>