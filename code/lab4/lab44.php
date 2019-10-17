<?php

session_start();

echo '<form action="lab44.php" method="POST">';
echo '<input type="number" name="n" required/><br />';
echo '<input type="submit" value="ok" name="btn_ok" />';


if (isset($_SESSION['arr'])) {



    if ($_POST['n'] % 2 == 0) {
        echo '<br>dentro<br>';
        array_push($_SESSION['arr'], $_POST['n']);
        print_r($_SESSION['arr']);
    } else {
        header("location: index.php");
    }
} else {
    $_SESSION['arr'] = array();
    header("location: index.php");
}
echo '<form/>';
