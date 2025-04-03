# Proyecto final



# Instalación
## Instalar dependencias
Para poder ejecutar el proyecto debes tener [Composer](https://getcomposer.org/) instalado. Una vez instalado ejecuta el siguiente comando en la terminal para instalar las dependencias.

```bash
composer update
```

## Conectarse a la base de datos
Para poder concectarse a la base de datos debes crear un archivo llamado `.env` dentro de la carpeta `includes/` del proyecto. Despues copiar el contenido del archivo `.env.template` y pergarlo en el archivo `.env` y luego ingresar las credenciales correspondientes en el archivo.
```
//Ejemplo (dentro del archivo .env)
DB_HOST=(ej. localhost)
DB_USER=<nombreDeUsuario>
DB_PASS=<passwordBaseDeDatos>
DB_NAME=<nombreBaseDeDatos>
```