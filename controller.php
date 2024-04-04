<?php
require_once 'model.php';
require_once 'database.php';

$requestUri = $_SERVER['REQUEST_URI'];
$collection = $client->selectCollection($_ENV['MONGODB_DB'], $_ENV['MONGODB_COLLECTION']);

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (strpos($requestUri, '/case-study/filter') !== false) {
        // Handle filter request
        $queryParams = [];
        parse_str(parse_url($requestUri, PHP_URL_QUERY), $queryParams);
        $city = isset($queryParams['city']) ? $queryParams['city'] : '';
        $country = isset($queryParams['country']) ? $queryParams['country'] : '';
        $data = getAllData($collection, $city, $country);
        echo json_encode($data);
    } else if ($requestUri === '/case-study/') {
        // Handle request to get all data
        $data = getAllData($collection);
        echo json_encode($data);
    } else {
        http_response_code(404);
        echo json_encode(array('message' => 'Endpoint Not Found'));
    }
} elseif ($_SERVER["REQUEST_METHOD"] === "POST" && $requestUri === '/case-study/') {
    // $postData = json_decode(file_get_contents("php://input"), true);
    $postData = $_POST;
    $insertedId = createData($collection, $postData);
    echo json_encode(["_id" => $insertedId]);

} elseif ($_SERVER["REQUEST_METHOD"] === "PUT") {
    parse_str(file_get_contents("php://input"), $putData);
    $updatedCount = $dataModel->updateData($putData['_id'], $putData);
    echo json_encode(["modifiedCount" => $updatedCount]);

} elseif ($_SERVER["REQUEST_METHOD"] === "DELETE") {
    parse_str(file_get_contents("php://input"), $deleteData);
    $deletedCount = $dataModel->deleteData($deleteData['_id']);
    echo json_encode(["deletedCount" => $deletedCount]);

} else {
    http_response_code(405);
    echo json_encode(array('message' => 'Request Method Not Found/Not Allowed'));
}

?>
