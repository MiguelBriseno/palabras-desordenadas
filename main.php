<?php

$palabras = array("sol", "luna", "cielo");
$palabrasDesordenadas = array();

for($i = 0; $i < 3; $i++){
    $palabrasDesordenadas[$i] = str_shuffle($palabras[$i]);
}

echo "
    <!DOCTYPE html>
    <html lang='es'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Formulario con Bootstrap</title>
        <!-- Bootstrap CSS -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class='container mt-5'>
            <h1>Descubre la palabra desordenada</h1>
        </div>
        <div class='container mt-5'>
            <form action='analisis.php' method='GET'>
                <div class='mb-3'>
                    <label for='palabra1' class='form-label'>Primera palabra: {$palabrasDesordenadas[0]}</label>
                    <input type='text' class='form-control' id='palabra1' name='palabra1'/>
                </div>
                <div class='mb-3'>
                    <label for='palabra2' class='form-label'>Segunda palabra: {$palabrasDesordenadas[1]}</label>
                    <input type='text' class='form-control' id='palabra2' name='palabra2'/>
                </div>
                <div class='mb-3'>
                    <label for='palabra3' class='form-label'>Tercera palabra: {$palabrasDesordenadas[2]}</label>
                    <input type='text' class='form-control' id='palabra3' name='palabra3'/>
                </div>
                <button type='submit' class='btn btn-primary'>Enviar</button>
            </form>
        </div>

        <!-- Bootstrap JS y dependencias -->
        <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js'></script>
        <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js'></script>
    </body>
    </html>
";
?>
