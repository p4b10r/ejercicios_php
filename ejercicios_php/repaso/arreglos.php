<?php

$Arreglo= array('identificador1' => "cosa", "identifcador2"=>"otra cosa" );

#var_dump($Arreglo) ;
#echo $Arreglo["identificador1"];


/*$Arreglo_de_arreglos = array(
                        array("tecnico"=>"Cesar Vaccia","año"=>"2000"),
                        array("tecnico"=>"Lulo Socías","año"=>"2007"),
                        array("tecnico"=>"Huevo Valencia","año"=>"2021"),
                       );
echo $Arreglo_de_arreglos[0]["año"];
*/
print_r(array_values($Arreglo));
 ?>
