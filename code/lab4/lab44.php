<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Document</title>
</head>

<body>
  <?php
  echo '<form method="POST" action="./lab44.php">';
  echo 'meter numero par:<br />';
  echo '<input type="number" name="n" /><br />';


  $arr = array();

  if ($_POST['n'] % 2 == 0) {
    array_push($arr, $_POST['n']);
  } else {
    echo 'introduzca valor correcto<br>';
  }

  echo '<input type="submit" value="ok" name="btn_ok" /><br>';
  echo '<input type="submit" value="mostrar_arr" name="btn_mostrar_arr" /><br>';
  echo '</form>';

  if (isset($_POST['mostrar_arr'])) {
    echo 'mostrar arreglo<br>';
  }
  ?>
</body>

</html>