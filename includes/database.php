<?php 
/**
 * Funcion para conectarte a la base de datos
 */
function connectDB() : mysqli
{
    try {
        $db = mysqli_connect(
            $_ENV["DB_HOST"],
            $_ENV["DB_USER"],
            $_ENV["DB_PASS"],
            $_ENV["DB_NAME"]
        );
    } catch (mysqli_sql_exception $e) {
        die("<h1>Lo sentimos, hubo un error al conectarse a la base de datos</h1>");
    }

    return $db;
}
