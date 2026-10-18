<?php
require_once __DIR__ . "/autoload.php";
require_once __DIR__ . "/router.php";
//si la rura te parametres els extraiem i a url
//ens quedem nomes amb la ruta
//per exemple /products?id=4
//url = /products
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

route($url);
