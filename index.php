<?php 
require_once 'database.php';
require_once 'model.php';
require_once 'controller.php';
require_once 'routes.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
$requestUri = $_SERVER['REQUEST_URI'];




// // Define route for fetching all documents from the collection
// // echo $_SERVER['REQUEST_URI']; == case_study
// if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_SERVER['REQUEST_URI'] === '/case-study/') {
//     // Select the collection

//     // Fetch all documents from the collection
//     $cursor = $collection->find();

//     // Convert documents to an array
//     $documents = iterator_to_array($cursor);

//     // Set response headers
//     header('Content-Type: application/json');

//     // Return JSON response with the documents
//     echo json_encode($documents);
// } else {
//     // Handle unsupported or invalid requests
//     http_response_code(404);
//     echo json_encode(array('message' => 'Not Found'));
// }