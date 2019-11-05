<?php
$precio1 = $_POST['precio1'];
$precio2 = $_POST['precio2'];
$precio3 = $_POST['precio3'];
$media = ($precio1 + $precio2 + $precio3) / 3;
echo "<br/> recibido";
echo "<br/> precio1: $" . $precio1;
echo "<br/> precio2: $" . $precio2;
echo "<br/> precio3: $" . $precio3;
echo "<br/> media: $" . $media;
?>