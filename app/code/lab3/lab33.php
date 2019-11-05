<Html>

<head>
    <title>
        lab 3.3
    </title>
</head>

<body>
    <?php
    if (array_key_exists('enviar', $_POST)) {

        if ($_REQUEST['Apellido'] != "") {

            echo "apellido: $_REQUEST[Apellido]";
        } else {
            echo "por favor, coloque apellido";
        }
        echo "<br>";

        if ($_REQUEST['Nombre'] != '') {
            echo "nombre: $_REQUEST[Nombre]";
        } else {
            echo "por favor, coloque nombre";
        }
    } else {

        ?>
        <form action="lab33.php" method="post">
            Nombre: <input type="text" name="Nombre"><br>
            Apellido: <input type="text" name="Apellido"><br>
            <input type="submit" name="enviar" value="enviar datos">
        </form>
    <?php
    }
    ?>

</body>

</Html>