<html>

<head>
    <title>lab 2.5</title>
</head>

<body>
    <?php
$figuras = array(
'cuadrado',
'triangulo',
'circulo'    
);

$figuras[1]='rectangulo';
mostrar_figuras($figuras,"asignacion del rectangulo");

array_push($figuras,"pentagono");
mostrar_figuras($figuras,"adicion del pentagono al final");

array_unshift($figuras,"hexagono");
mostrar_figuras($figuras,"adicion del hexagono al inicio");

array_pop($figuras);
mostrar_figuras($figuras,"se elimina el ultimo");

array_shift($figuras);
mostrar_figuras($figuras,"se elimina el primero");

function mostrar_figuras($figuras,$mensaje){
echo "<br> arreglo despues de $mensaje <br>";

foreach($figuras as $fig){
echo "$fig <br>";
}

};
?>
</body>

</html>