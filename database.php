<?php 
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$username = $_ENV['MONGODB_USER'];
$password = $_ENV['MONGODB_PASS'];

use MongoDB\Driver\ServerApi;

$uri = 'mongodb+srv://' . $username . ':' . $password . '@cluster0.6tatl6u.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';

$apiVersion = new ServerApi(ServerApi::V1);

$client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);

try {
    $client->selectDatabase('admin')->command(['ping' => 1]);
    // echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    printf($e->getMessage());
}

