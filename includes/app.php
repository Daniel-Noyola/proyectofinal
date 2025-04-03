<?php
namespace Includes;
use Dotenv\Dotenv;

require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();


// Directorio de archivos y carpetas
// define('BASE_URL', '/proyectofinal'); 
define('IMAGES_PATH', __DIR__ . '../media/images');
define('ICONS_PATH', __DIR__ . '../media/icons');

define('DATABASE_FILE', __DIR__ . '/database.php');
define('CSS_FILE', __DIR__ . '../src/css/app.css');
define('HELPERS_FILE', __DIR__ . '/helpers.php');

require HELPERS_FILE;
