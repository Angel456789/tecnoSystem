<?php

require_once __DIR__ . "/../lib/php/recuperaJson.php";
require_once __DIR__ . "/../lib/php/devuelveJson.php";

$json = recuperaJson();
$saludo = $json->saludo;
$nombre = $json->nombre;
$resultado =
 "{$saludo} {$nombre}.";
devuelveJson($resultado);
