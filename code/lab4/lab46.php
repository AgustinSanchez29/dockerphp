<?php
echo "<table border=1>";

for ($i = 0; $i < $_POST['n']; $i++) {
    echo "<tr>";

    for ($j = 0; $j < $_POST['n']; $j++) {

        metervalor($i, $j);
    }
    echo "</tr>";
}
echo "</table>";

//meter valor
function metervalor($a, $b)
{
    if ($a == $b) {
        echo "<td>", 1, "</td>";
    } else {
        echo "<td>", 0, "</td>";
    }
}
