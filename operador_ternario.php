<?php
  $number1 = 1;
  $number2 = 2;

  if($number2 > $number1) {
    $a = 'Número 2 é maior que número 1';
  } else {
    $b = 'Número 2 não é maior que número 1';
  }

  $ternario = ($number2 > $number1) ?
  'Número 2 é maior que número 1' : 'Número 2 não é maior que número 1';

  echo $ternario; // Número 2 é maior que número 1
?>
