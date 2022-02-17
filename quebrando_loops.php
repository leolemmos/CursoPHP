<?php
for($a = 1; $a <= 10; $a++){
  if($a == 3) {
    continue;
  }

  $cubo = $a * $a * $a;
  echo "O cubo de $a é $cubo<br />";
}

//O cubo de 1 é 1
//O cubo de 2 é 8
//O cubo de 4 é 64
//O cubo de 5 é 125
//O cubo de 6 é 216
//O cubo de 7 é 343
//O cubo de 8 é 512
//O cubo de 9 é 729
//O cubo de 10 é 1000
?>
