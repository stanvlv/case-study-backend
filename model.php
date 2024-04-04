<?php
require_once 'database.php';

// Function to get all data
function getAllData($collection,  $city = null, $country = null)
{
    try {
        $filter = [];
        if ($city !== null) {
            $filter['city'] = $city;
        }
        if ($country !== null) {
            $filter['country'] = $country;
        }
        $cursor = $collection->find($filter);
        $documents = iterator_to_array($cursor);
        return $documents;
    } catch (Exception $e) {
        // Log or handle the error as needed
        error_log('Error in getAllData(): ' . $e->getMessage());
        return ["error" => "An error occurred while retrieving data"];
    }
}

// Function to get data by ID
function getDataById($collection, $id)
{
    return $collection->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
}

// Function to create data
function createData($collection, $data)
{
    if (!isset($data['rank'], $data['hospitalName'], $data['country'], $data['city'], $data['website'])) {
        return ["error" => "Incomplete data"];
    }
    try {
        $insertOneResult = $collection->insertOne($data);
        return ["_id" => $insertOneResult->getInsertedId()];
    } catch (Exception $e) {
        // Handle database errors
        return ["error" => "Database error: " . $e->getMessage()];
    }
    $insertOneResult = $collection->insertOne($data);
    return $insertOneResult->getInsertedId();
}

// Function to update data
function updateData($collection, $id, $data)
{
    $updateResult = $collection->updateOne(
        ['_id' => new MongoDB\BSON\ObjectId($id)],
        ['$set' => $data]
    );
    return $updateResult->getModifiedCount();
}

// Function to delete data
function deleteData($collection, $id)
{
    $deleteResult = $collection->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
    return $deleteResult->getDeletedCount();
}
