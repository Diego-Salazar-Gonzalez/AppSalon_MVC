<?php 
require __DIR__ . '/../vendor/autoload.php';
$dontenv = Dotenv\Dotenv::createImmuteable(__DIR__);
$dontenv->safeLoad();
require 'funciones.php';
require 'database.php';


// Conectarnos a la base de datos

use Model\ActiveRecord;
ActiveRecord::setDB($db);