<?php 
$aPacientes = array();

$aPacientes[] = array(
    "dni" => "33.765.012",
    "nombre" => "Ana Acuña",
    "edad" => "45",
    "peso" => 81.50
);

$aPacientes[] = array(
    "dni" => "23.684.385",
    "nombre" => "gonzalo Bustamante",
    "edad" => "66",
    "peso" => 79
);

$aPacientes[] = array(
    "dni" => "24.693.738",
    "nombre" => "Daniel Blanco",
    "edad" => "23",
    "peso" => 70
);

function contar($miArray){
    $cantidad = 0;
    foreach ($miArray as $item){
        $cantidad++;
    }

    return $cantidad;
}

echo "La cantidad de pacientes es: ". contar($aPacientes);

?>