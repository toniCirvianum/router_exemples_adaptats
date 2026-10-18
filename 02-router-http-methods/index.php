<?php
require_once __DIR__ . "/autoload.php";
require_once __DIR__ . "/router.php";
$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$method = $_SERVER["REQUEST_METHOD"];
route($method, $url);
