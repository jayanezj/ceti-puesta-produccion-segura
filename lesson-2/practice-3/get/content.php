<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $connection = mysql_connect('localhost', 'sqliuser3', 'password');

    mysql_select_db('galileo') or die('No se pudo seleccionar la base de datos');


    $result = mysql_query("Select * from usuarios where idusuario=" . $id . ";");

    while ($fila = mysql_fetch_assoc($result)) {
        echo $fila["nombre"] . " ";
        echo $fila["apellidos"] . " ";
        echo $fila["password"] . " ";
        echo nl2br("\n");
    }


} else
    echo "Error en parámetros";

?>