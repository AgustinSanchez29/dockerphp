<?php
include("class_lib.php");
//intanciamos un objeto de la clase de class-lib

$cliente_1 = new cliente("pepe", 7);
$cliente_2 = new cliente("juan", 10);

//mostrar el numero que tiene cada cliente

echo "<br> el cliente 1 tiene " . $cliente_1->dame_numero();
echo "<br> el cliente 2 tiene " . $cliente_2->dame_numero();
