<?php
include("class_lib.php");

$soporte1 = new soporte("futbol game", 22, 3);

echo "<b> " . $soporte1->titulo . "<b>";
echo "<br> precio" . $soporte1->dame_precio_sin_itbms() . " dolares";
echo "<br> con itbms:" . $soporte1->dame_precio_con_itbms() . " dolares";

$mi_video = new video("los otros", 22, 4.5, "115 min");
echo "<br>";
echo "<b>" . $mi_video->titulo . " </b>";
echo "<br>precio" . $mi_video->dame_precio_sin_itbms() . " dolares";
echo "<br>con itbms" . $mi_video->dame_precio_con_itbms() . " dolares";
echo "<br>" . $mi_video->imprime_caracteristicas();

$mijuego = new juego("pes 19", 21, 2.5, "xbox", 1, 2);
$mijuego->imprime_caracteristicas();
$mijuego->imprime_jugadores_posibles();
echo "<p>";
$mijuego2 = new juego("fifa 19", 27, 3, "ps4", 1, 2);
$mijuego2->imprime_caracteristicas();
$mijuego2->imprime_jugadores_posibles();
echo "<p>";
