<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$aEmpleados = array();

$aEmpleados[] = array(
    "dni" => "3478939",
    "nombre" => "Leonel Santana",
    "bruto" => 70550.25
);

$aEmpleados[] = array(
    "dni" => "9834733",
    "nombre" => "Brenda del Valle",
    "bruto" => 74700
);

$aEmpleados[] = array(
    "dni" => "3478974",
    "nombre" => "Junior Sareti",
    "bruto" => 83000
);

$aEmpleados[] = array(
    "dni" => "7893974",
    "nombre" => "Daniel Sandoval",
    "bruto" => 58100
);

function calcularNeto($bruto)
{
    return $bruto - ($bruto * 0.17);
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Empleados</title>
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-4 pb-5">
                <h1>Listado de empleados</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th>DNI</th>
                            <th>Nombre</th>
                            <th>Sueldo</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $personal = 0;
                        foreach ($aEmpleados as $item) {
                        ?>
                            <tr>
                                <td> <?php echo ($item["dni"]); ?></td>
                                <td> <?php echo strtoupper($item["nombre"]); ?> </td>
                                <td> <?php echo number_format(calcularNeto($item["bruto"]), 2, ",", "."); ?> </td>
                            </tr>

                        <?php  $personal++;} ?>
                    </tbody>
                </table>
                <?php
                echo "<b>Cantidad de empleados activos: <b>" . $personal;
                ?>
            </div>
        </div>
    </main>
</body>

</html>