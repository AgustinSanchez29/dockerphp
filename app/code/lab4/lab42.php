<?php

$f = 1;
for ($i = $_POST['n']; $i > 0; $i--) {
    echo $i . ' <br>';
    $f = $f * $i;
}
echo 'factorial: ' . $f;
