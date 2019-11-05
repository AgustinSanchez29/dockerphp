<?php
$diametro = $_POST['diam'];
$altura =$_POST['altu'];
$pi = 3.1416;
$volumen=(($pi*$diametro*$diametro)/4)*$altura; 

echo "<br> volumen: ".$volumen." m³";
?>