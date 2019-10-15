<?php
echo '<h1>Hello from docker: index.php</h1>';
echo '<h4>Felicidades: Rho99, index.php dockerizado!</h1>';
echo '<h1>Aqui esta tu recompensa! Sehr gut !</h1>';

//field
define("ARRAY_SIZE", 20);
$elementos = array();
$i = 0;

//main: se utiliza while, porque no se tiene certeza de cuando sera llenado
while ($i < ARRAY_SIZE) {
    $rnd = rand(0, 99);

    if (in_array($rnd, $elementos)) {
        echo 'repetido<br>';
    } else {
        array_push($elementos, $rnd);
        $i++;
    }
}
echo '<img src="./cat-meme.png" />';
genTable($elementos);

function genTable($arr)
{
    echo '<table border="1|0">';
    foreach ($arr as $key => $value) {
        echo '<tr>';
        echo "<th>$key</th>";
        echo "<td>$value</td>";
        echo '</tr>';
    }
    echo '</table>';

    echo '<br> clave: ' . array_search(max($arr), $arr);
    echo '<br> valor: ' . $arr[array_search(max($arr), $arr)];
}
