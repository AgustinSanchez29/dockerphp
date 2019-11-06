<?php
include("class_lib.php");
$temp1 = new Template;
$prueba = "valor de prueba";
$temp1->poner_variable("var1", "Valor 1");
$temp1->poner_variable("var2", "Valor 2");
$temp1->poner_variable("var3", "Valor 3");
echo $temp1->ver_html($prueba);
