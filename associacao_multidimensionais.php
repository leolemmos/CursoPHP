<?php
  $temp = array(
    '2010' => array(
    'Outubro' => 25,
    'Novembro' => 23,
    'Dezembro' => 20),
    '2011' => array(
    'Outubro' => 26,
    'Novembro' => 22,
    'Dezembro' => 21),
    '2012' => array(
    'Outubro' => 27,
    'Novembro' => 28,
    'Dezembro' => 19)
  );

  echo "Dezembro de 2012 foi de: {$temp['2012']['Dezembro']} graus";
// Dezembro de 2012 foi de: 19 graus
?>
Listagem 20. Arrays Multidimensionais
Veja que criamos a $temp que guarda um array. Em nosso exemplo, o array com o nome de 2010 guarda os valores Outubro, Novembro e Dezembro em um outro array, que por sua vez, guarda outros valores, que são a temperatura. Veja que demos um echo em {$temp['2012']['Dezembro']} onde $temp guarda um array 2012 e inicia um outro array que contém a chave dezembro e que tem o valor que queremos.

Criando Arrays de uma forma alternativa
Podemos criar arrays de uma forma simples e rápida utilizando o operador [ ], como mostra a Listagem 21.

<?php
  $number1 = array(100, 101, 102);
  $num
