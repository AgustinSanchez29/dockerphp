<html>
<header>
    <title>lab 2.4</title>
</header>

<body>
    <?php
//creacion de arreglo asociativo [clave][valor]
$personas = array(
    "juan"=>"panama",
    "john"=>"usa",
    "eica"=>"finlandia",
    "kusanagi"=>"japan"
);

//recorrer todo el arreglo asociativo ?? como funciona el ultimo pedazo??
foreach($personas as $per => $pais){
print("$per vive en $pais<br>");
}

echo "<br>".$personas["juan"];
echo "<br>".$personas["eica"];
?>
</body>

</html>