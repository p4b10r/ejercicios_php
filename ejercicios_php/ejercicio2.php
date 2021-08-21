<?php

$Dato1=5;
$Dato2=2;
$Dato3=3;


function Promedio($numero1,$numero2,$numero3){
  $denominador=3;
  $numerador=$numero1+$numero2+$numero3;
  $promedio=$numerador/$denominador;
  echo $promedio;
}

Promedio($Dato1,$Dato2,$Dato3)

 ?>
