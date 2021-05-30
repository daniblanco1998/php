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


?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>


<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <h1>Listado de pacientes</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Edad</th>
                            <th>Pesos</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($aPacientes as $paciente) {
                        ?>

                            <tr>
                                <td><?php echo $paciente["dni"]; ?></td>
                                <td><?php echo $paciente["nombre"]; ?></td>
                                <td><?php echo $paciente["edad"]; ?></td>
                                <td><?php echo $paciente["peso"]; ?></td>
                            </tr>

                        <?php } ?>


                    </tbody>

                </table>
            </div>
        </div>
    </main>


</body>

</html>