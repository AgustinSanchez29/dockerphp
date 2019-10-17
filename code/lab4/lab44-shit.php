 <?php

  if (array_key_exists('enviar', $_POST)) {
    for ($i = 1; $i <= 5; $i++) {
      if (($_REQUEST['num' . $i]) % 2 == 0)
        $par = 0;
      else
        $par = 1;
    }
    if ($par == 0) {
      mostrar_mayor();
    } else {
      ?>
     <FORM ACTION="lab44.php" METHOD="POST">
       <?php
            //$tamaño= $_REQUEST['tam'];
            echo ("no todos son pares</br>");
            ?>
       <INPUT TYPE="SUBMIT" NAME="send" VALUE="Regresar">
     </FORM>
   <?php

      }
    } else {
      ?>
   <FORM ACTION="lab44.php" METHOD="POST">
     <?php
        for ($n = 1; $n <= 5; $n++)
          echo ("n: <INPUT TYPE =text NAME=num$n required> <br/> ");
        ?>
     <INPUT TYPE="SUBMIT" NAME="enviar" VALUE="Enviar datos">
   </FORM>

 <?php
  }
  function mostrar_mayor()
  {
    $vec = array();
    for ($i = 1; $i <= 5; $i++) {
      $vec[] = $_POST['num' . $i];
    }
    foreach ($vec as $pos) {
      echo ($pos . " ");
    }
  }
  ?>