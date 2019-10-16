<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>arreglo numero par</title>
</head>

<body>
  <?php

  echo '<form method="POST" action="./lab44.php">';
  echo 'meter numero par:<br />';
  echo '<input type="number" name="n" /><br />';
  echo '<input type="submit" value="ok" name="btn_ok" /><br>';
  echo '<input type="submit" value="mostrar arreglo" name="btn_mostrar_arr" /><br>';

  $n = $_POST['n'];


  if ($n % 2 == 0) {
    echo 'meter ' . $n;
  }

  echo '</form>';
  ?>
</body>

</html>