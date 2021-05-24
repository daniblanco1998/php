<?php
$fecha = date("d/m/Y");
$nombre = "Daniel Blanco";
$edad = 33;
$aPeliculas = array("Volver al futuro", "El día despues de mañana", "Titanic");
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha personal</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 py-5 text-center">
                <h1>Ficha personal</h1>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-hover border">
                    <tbody>
                        <tr>
                            <th>Fecha:</th>
                            <td><?php  echo $fecha; ?></td>
                        </tr>
                        <tr>
                            <th>Nombre y Apellido:</th>
                            <td><?php  echo $nombre; ?></td>
                        </tr>
                        <tr>
                            <th>Edad:</th>
                            <td><?php  echo $edad; ?></td>
                        </tr>
                        <tr>
                            <th>Peliculas favoritas:</th>
                            <td>
                                <?php  echo $aPeliculas[0];?><br/>
                                <?php echo $aPeliculas[1];?><br/>
                                <?php echo $aPeliculas[2];?>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </main>

</body>

</html>