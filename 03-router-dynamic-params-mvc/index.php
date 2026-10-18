<?php
require_once __DIR__ . "/autoload.php";
require_once __DIR__ . "/router.php";
route($_SERVER["REQUEST_METHOD"], parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH));
