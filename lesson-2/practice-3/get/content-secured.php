<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $connection = mysqli_connect('localhost', 'sqliuser', 'password', 'galileo');

    $sql = "SELECT * FROM `usuarios` WHERE `idusuario`=?";

    if ($stmt = mysqli_prepare($connection, $sql)) {
        mysqli_stmt_bind_param($stmt, 'i', $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_row($result);

        if ($row) {
            echo "{$row[0]} {$row[1]} {$row[2]}";
        } else {
            echo "Usuario no encontrado";
        }

        mysqli_close($connection);
    }
} else
    echo "Error en parámetros";

?>