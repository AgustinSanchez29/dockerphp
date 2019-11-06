<?php
if (array_key_exists("enviar", $_POST)) {

    include("class_lib.php");
    $diam = $_POST["diam"];
    $altu = $_POST["altu"];

    $cil = new Cilindro($diam, $altu);

    $volumen = $cil->calcular_volumen();
    $area = $cil->calcular_area();

    echo "el area es " . $area . " m² <br>";

    echo "el volumen es " . $volumen . " m³ <br>";
} else { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>laboratorio 7.7</title>
    </head>

    <body>
        <form name="formularioDatos" method="POST" action="lab77.php">
            <p>calculo de area y volumen de un cilindro</p>
            <br>
            introduzca el diametro en metros: <input type="text" name="diam" value="">
            </br></br>
            introduzca la altura en metros: <input type="text" name="altu" value="">
            </br></br>

            <input value="calcular" name="enviar" type="submit" />
        </form>


    </body>

    </html>
<?php
}
?>