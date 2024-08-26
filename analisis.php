<?php

$palabras = array("sol", "luna", "cielo");

$palabra1_correcta = $_REQUEST["palabra1"] == $palabras[0];
$palabra2_correcta = $_REQUEST["palabra2"] == $palabras[1];
$palabra3_correcta = $_REQUEST["palabra3"] == $palabras[2];

echo "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Resultados</title>
        <!-- Bootstrap CSS -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class='container mt-5'>
            <div class='row'>
                <div class='col-md-4'>
                    <div class='card " . ($palabra1_correcta ? "text-bg-success" : "text-bg-danger") . "'>
                        <div class='card-body'>
                            <h4 class='card-title'>Primera palabra</h4>";

if ($palabra1_correcta) {
    echo "<h5>" . $palabras[0] . "</h5>";
} else {
    echo "<h5>" . $_REQUEST['palabra1'] . " es incorrecta</h5>";
}

echo "                      <p class='card-text'>" . ($palabra1_correcta ? "La 1 palabra ingresada es correcta" : "La 1 palabra ingresada es incorrecta") . "</p>
                        </div>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class='card " . ($palabra2_correcta ? "text-bg-success" : "text-bg-danger") . "'>
                        <div class='card-body'>
                            <h4 class='card-title'>Segunda palabra</h4>";

if ($palabra2_correcta) {
    echo "<h5>" . $palabras[1] . "</h5>";
} else {
    echo "<h5>" . $_REQUEST['palabra2'] . " es incorrecta</h5>";
}

echo "                      <p class='card-text'>" . ($palabra2_correcta ? "La 2 palabra ingresada es correcta" : "La 2 palabra ingresada es incorrecta") . "</p>
                        </div>
                    </div>
                </div>
                <div class='col-md-4'>
                    <div class='card " . ($palabra3_correcta ? "text-bg-success" : "text-bg-danger") . "'>
                        <div class='card-body'>
                            <h4 class='card-title'>Tercera palabra</h4>";

if ($palabra3_correcta) {
    echo "<h5>" . $palabras[2] . "</h5>";
} else {
    echo "<h5>" . $_REQUEST['palabra3'] . " es incorrecta</h5>";
}

echo "                      <p class='card-text'>" . ($palabra3_correcta ? "La 3 palabra ingresada es correcta" : "La 3 palabra ingresada es incorrecta") . "</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS y dependencias -->
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js'></script>
    </body>
    </html>
";

?>
