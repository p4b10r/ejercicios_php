<?php

#Para ver formateo de variables, revisar https://www.php.net/manual/es/function.sprintf.php

$datos = array(
             array("trabajador" => "TRABAJADOR" ,"horario"=>"HORARIO","departamento"=>"DEPARTAMENTO"),
             array('trabajador' => "María Luisa Rojas" ,"horario"=>"8 am a 3 pm", "departamento"=>"Producción" ),
             array('trabajador' => "José Perez Márquez" ,"horario"=>"3 pm a 10 pm", "departamento"=>"Seguridad" ),
             array('trabajador' => "Catalina Donoso Correa" ,"horario"=>"10 pm a 6 am", "departamento"=>"Producción" ),
             array('trabajador' => "Raul Lavín" ,"horario"=>"8 am a 3 pm", "departamento"=>"Producción" ),
             array('trabajador' => "Jorge Luis Venegas" ,"horario"=>"3 pm a 10 pm", "departamento"=>"Logística" )
);


for ($i=0; $i < 5; $i++) {
  echo sprintf("%-30s %-20s %-20s",$datos[$i]["trabajador"], $datos[$i]["horario"], $datos[$i]["departamento"]);
  echo "\n";
}

 ?>
