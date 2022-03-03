<?php

if (isset($_POST['username']) && isset($_POST['passwd'])) {
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];

    $connection = mysqli_connect('localhost', 'sqliuser3', 'password', 'galileo');

    echo 'Connected successfully';
    echo nl2br("\n\n");

    $username = mysqli_real_escape_string($connection, $username);
    $passwd = mysqli_real_escape_string($connection, $passwd);

    $sql = "SELECT `nombre`, `apellidos`, `password` FROM `usuarios` WHERE `nombre`={$username} AND `password`={$passwd}";

    $result = mysqli_query($connection, $sql);

    $row = mysqli_fetch_array($result);

    if($row) {
        echo "{$row['nombre']} {$row['apellidos']} {$row['password']}";
    } else {
        echo "Usuario no encontrado";
    }

    mysqli_close($connection);

} else
    echo "Error en parámetros";

?>