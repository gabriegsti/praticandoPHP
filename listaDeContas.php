<?php

//Adicionar itens no array associativo
$contasCorrentes = [
  '424.367.310-12'=>[
    'titular'=>'Osvaldo Erick Heitor da Paz',
    'saldo'=>0
  ],
  '419.860.450-99'=>[
    'titular'=>'Bernardo Filipe Henrique Fogaça',
    'saldo'=>0,
  ],
  '509.693.430-60'=>[
    'titular'=>'Erick Manuel Pedro Teixeira',
    'saldo'=>0
  ],
  '498.488.360-04'=>[
    'titular'=>'Diego Pedro Henrique Barros',
    'saldo'=>0
  ],
  '203.373.160-07'=>[
    'titular'=>'Benedito José Alves',
    'saldo'=>0
  ]
];

/*
 Implementar uma ferramenta com saque que
  acesse informações dentro de um array associativo
*/

/*Implementar um método e uma rotina em separado:
 sugerido o método 
 ver saldo,
 sacar e 
 depositar 
 mas poderia ser um para calcular salario ou aumento.
*/
function exibeMensagem(string $mensagem){
  echo $mensagem .' '. PHP_EOL;
}

function verSaldo($conta){
 return exibeMensagem("Saldo :".$conta['saldo']);
}

function sacar(float $valor, $conta){
  if($valor<0){
    exibeMensagem('Erro ao sacar o saque precisa ser maior que zero.');
    return $conta;
  }else{
     $conta['saldo'] -= $valor;
     return $conta;
  }
  }

function depositar(float $valor, $conta){
  if($valor < 0){
    exibeMensagem('Erro ao depositar, o valor do deposito precisa ser maior que zero.');
    return$conta;
  }else{
     $conta['saldo'] += $valor;
     return $conta;
  }
}

//Por padrão o php faz apenas passagem por valor.
$contasCorrentes['424.367.310-12'] = depositar(3000.0,$contasCorrentes['424.367.310-12']);

verSaldo($contasCorrentes['424.367.310-12']);
$contasCorrentes['424.367.310-12'] = sacar(500.0, $contasCorrentes['424.367.310-12']);
verSaldo($contasCorrentes['424.367.310-12']);


?>