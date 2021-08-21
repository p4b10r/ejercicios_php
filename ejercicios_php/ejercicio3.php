<?php

$UF=27000;

const PESOS=30000000;


function PrecioInmueble($ValorUF){
  $Precio=$ValorUF*PESOS;
  echo $Precio;

}

PrecioInmueble($UF);

 ?>
