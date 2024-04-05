<?php 
// TODO: Find the way to allow query paths for filter fetchint etc.
// Solution found - https://gist.github.com/RaVbaker/2254618
// TODO: add the RewriteEngine and a couple of other lines which will allow the app to take any url and direct it to the index
// This should fix the error of fetchint with case-study/filter?city=...


require_once 'database.php';
require_once 'model.php';
require_once 'controller.php';
require_once 'routes.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$requestUri = $_SERVER['REQUEST_URI'];
