<?php 
// .htaccess - https://gist.github.com/RaVbaker/2254618
// TODO: Check - this solutions seems to not be workin / xaamp/server settings?


require_once 'database.php';
require_once 'model.php';
require_once 'controller.php';
require_once 'routes.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$requestUri = $_SERVER['REQUEST_URI'];
