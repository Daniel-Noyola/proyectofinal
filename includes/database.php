<?php 

/**
 * Funcion para conectarte a la base de datos
 */
function connectDB() : mysqli
{
    try {
        $db = mysqli_connect('localhost', 'root', 'root', 'appsalon_db');
    } catch (mysqli_sql_exception $e) {
        die("<h1>Lo sentimos, hubo un error al conectarse a la base de datos</h1>");
    }

    return $db;
}
