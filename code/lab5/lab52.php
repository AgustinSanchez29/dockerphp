<?php
if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {
    $nombreDirectorio = "archivos/";
    $nombreArchivo = $_FILES['nombre_archivo_cliente']['name'];
    $tipoArchivo = $_FILES['nombre_archivo_cliente']['type'];;
    $extensions = array('image/jpeg', 'image/jpg', 'image/gif', 'image/png');
    $nombreCompleto = $nombreDirectorio . $nombreArchivo;
    $flag = FALSE;

    foreach ($extensions as $extension) {
        if ($extension == $tipoArchivo) {
            $flag = TRUE;
        }
    }

    if (is_file($nombreCompleto)) {
        $idUnico = time();
        $nombreArchivo = $idUnico . "-" . $nombreArchivo;
        echo "Archivo repetido, se cambiará el nombre a $nombreArchivo <br/><br/>";
    } else if ($_FILES['nombre_archivo_cliente']['size'] > 1000000) {
        echo "Limite máximo excedido, no se pudo subir archivo: <b>$nombreArchivo</b> al directorio<br/><br/>";
        exit;
    }

    //Validación del tipo del archivo
    else if ($centinela != TRUE) {
        echo "<p>El formato del archivo <b>$nombreArchivo</b> no es válido.</p>";
        echo "<p><b>Formatos válidos:</b>Jpeg, jpg, gif y png.</p>";
        echo "<br/><br/>";
        exit;
    }
    //Archivo subido correctamente
    move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombreArchivo);
    echo "El archivo se ha subido satisfactoriamente al directorio <b>$nombreDirectorio</b> <br/>";
} else {
    echo 'No se ha podido subir el archivo <br/>';
}
