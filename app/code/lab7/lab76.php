<?php
include("class_lib.php");
$diam = $_POST["diam"];
$altu = $_POST["altu"];

$cil = new Cilindro($diam, $altu);

$volumen = $cil->calcular_volumen();
$area = $cil->calcular_area();

echo "el area es " . $area . " m² <br>";

echo "el volumen es " . $volumen . " m³ <br>";
