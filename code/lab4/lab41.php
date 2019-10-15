<?php
echo 'ventas: ' . $_POST['pct-ventas'] . '%';
if ($_POST['pct-ventas'] >= 80) {
    echo '<img src="./img1.png">';
}

if (($_POST['pct-ventas'] >= 50) and ($_POST['pct-ventas'] < 80)) {
    echo '<img src="./img2.png">';
}

if ($_POST['pct-ventas'] < 50) {
    echo '<img src="./img3.png">';
}
