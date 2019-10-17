<!DOCTYPE html>
<html>

<head>
  <title>lab44.php</title>
  <?PHP
  if (isset($_POST['meter'])) {
    $n = $_POST['n'];

    if ($n % 2 == 0) {
      echo $n . '<br>';
    } else {
      echo 'no es par<br>';
    }
  }
  ?>
</head>

<body>
  <Form name="form1" Method="POST" Action="./lab44.php">
    <Input Type="number" Value="" Name="n">
    <Input Type="Submit" Name="meter" Value="Meter">
  </FORM>
</body>

</html>