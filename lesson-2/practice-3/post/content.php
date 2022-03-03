<?php

if (isset($_POST['username']) && isset($_POST['passwd'])) {
    $username = $_POST['username'];
    $passwd = $_POST['passwd'];


    $connection = mysql_connect('localhost', 'sqliuser', 'password');

    echo 'Connected successfully';
    echo nl2br("\n\n");


    mysql_select_db('galileo') or die('No se pudo seleccionar la base de datos');


    $result = mysql_query("SELECT nombre,apellidos,password FROM usuarios WHERE nombre='" . $username . "' and password='" . $passwd . "';");

    while ($fila = mysql_fetch_assoc($result)) {
        echo $fila["nombre"] . " ";
        echo $fila["apellidos"] . " ";
        echo $fila["password"] . " ";
        echo nl2br("\n");
    }


    mysql_close($connection);


} else
    echo "Error en parámetros";

?>
