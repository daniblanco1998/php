<?php

if ($_POST) { //es postback?
    //print_r($_POST); //esto imprime los datos del submit del formulario
    //print_r($_GET); //imprime los datos de  la query string
    //print_r($_REQUEST); //esto imprime los dos a la vez
    $usuario = $_REQUEST["txtUsuario"];
    $clave = $_REQUEST["txtClave"];

    if ($usuario != "" && $clave != "") {
        header("Location: acceso-confirmado.php"); //header ("Location: ") se usa para redirecionar a otra pagina
    } else {
        $mensaje = "Válido para usuarios registrados";
    }
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 pt-3">
                <h1>Formulario</h1>
            </div>
        </div>
        <div class="row">
            <?php
            if (isset($mensaje) && $mensaje != "") {
                echo '<div class="alert alert-danger" role="alert">' . $mensaje . '</div>';
            }
            ?>
            <div class="col-12">

                <form method="POST" action="">
                    <div>
                        <input type="text" id="txtUsuario" name="txtUsuario" placeholder="Usuario">
                    </div>
                    <div class="py-3">
                        <input type="password" id="txtClave" name="txtClave" placeholder="Clave">
                    </div>
                    <div class="py-2">
                        <button type="submit" class="btn-primary" id="btnEnviar" name="btnEnviar">ENVIAR</button>
                    </div>
                </form>
            </div>
        </div>

    </main>

</body>

</html>