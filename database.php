<?php 
require_once __DIR__ . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$username = $_ENV['MONGODB_USER'];
$password = $_ENV['MONGODB_PASS'];


use MongoDB\Driver\ServerApi;

// Replace the placeholder with your Atlas connection string
$uri = 'mongodb+srv://' . $username . ':' . $password . '@cluster0.6tatl6u.mongodb.net/?retryWrites=true&w=majority&appName=Cluster0';

// Set the version of the Stable API on the client
$apiVersion = new ServerApi(ServerApi::V1);

// Create a new client and connect to the server
$client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);

try {
    // Send a ping to confirm a successful connection
    $client->selectDatabase('admin')->command(['ping' => 1]);
    // echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    printf($e->getMessage());
}

