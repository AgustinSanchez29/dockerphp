<?php
include("class_lib.php");
echo MiClase::constante . "<br>";

$clase = new MiClase();
$clase->mostrar_constante();
