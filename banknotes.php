<?php
$valor = readline();

$x = $valor;
$contador100 = 0;
$contador50 = 0;
$contador20 = 0;
$contador10 = 0;
$contador5 = 0;
$contador2 = 0;
$contador1 = 0;

while ($valor > 0) {
  if ($valor >= 100) {
    $valor -= 100;
    $contador100++;
  }else if ($valor >= 50){
    $valor -= 50;
    $contador50++;
  }else if ($valor >= 20){
    $valor -= 20;
    $contador20++;
  }else if ($valor >= 10){
    $valor -= 10;
    $contador10++;
  }else if ($valor >= 5){
    $valor -= 5;
    $contador5++;
  }else if ($valor >= 2){
    $valor -= 2;
    $contador2++;
  }else if ($valor >= 1){
    $valor -= 1;
    $contador1++;
  }
}
  echo "$x\n";
  echo "$contador100 nota(s) de R$ 100,00\n";
  echo "$contador50 nota(s) de R$ 50,00\n";
  echo "$contador20 nota(s) de R$ 20,00\n";
  echo "$contador10 nota(s) de R$ 10,00\n";
  echo "$contador5 nota(s) de R$ 5,00\n";
  echo "$contador2 nota(s) de R$ 2,00\n";
  echo "$contador1 nota(s) de R$ 1,00\n";
  ?>