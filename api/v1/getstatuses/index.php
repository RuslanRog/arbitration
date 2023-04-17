<?php
// API SERVER SIDE

// For beautiful dump();
// require __DIR__.'/vendor/autoload.php'; 
require_once '../../Database.php';


// Get the singleton instance of the Database class.
$database = Database::getInstance();

// Get the PDO connection object.
$pdo = $database->getConnection();

// Get all data from DB.
$sql = "SELECT * FROM `leads` WHERE 1";


// Use the PDO connection object to query the database
$stmt = $pdo->prepare($sql);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Output the JSON response.
header('Content-Type: application/json'); // Set response header to indicate JSON content type
$str = json_encode($results, JSON_UNESCAPED_UNICODE);
echo $str;