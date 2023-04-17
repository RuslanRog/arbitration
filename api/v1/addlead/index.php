<?php
// API SERVER SIDE

// For beautiful dump();
// require __DIR__.'/vendor/autoload.php'; 
require_once '../../Database.php';


// Getting data from a POST request.
$firstName      = $_POST['firstName'];
$lastName       = $_POST['lastName'];
$phone          = $_POST['phone'];
$email          = $_POST['email'];
$box_id         = $_POST['box_id'];
$offer_id       = $_POST['offer_id'];
$countryCode    = $_POST['countryCode'];
$language       = $_POST['language'];
$password       = $_POST['password'];
$ip             = $_POST['ip'];
$landingUrl     = $_POST['landingUrl'];

$data = date("Y-m-d H:i:s");

$response = array(
    'box_id'        => $box_id,
    'offer_id'      => $offer_id,
    'countryCode'   => $countryCode,
    'language'      => $language,
    'password'      => $password,
    'ip'            => $ip,
    'landingUrl'    => $landingUrl
);


// Encoding data in JSON format.
$json_response = json_encode($response);

// Set response header in JSON format.
header('Content-Type: application/json');

// Sending data in JSON format in response.
echo $json_response;



// Get the singleton instance of the Database class.
$database = Database::getInstance();

// Get the PDO connection object.
$pdo = $database->getConnection();

// Here it is better to use Medoo or RedBeanPHP protection.
$sql = "INSERT INTO `leads`(`firstName`, `lastName`, `phone`, `email`, `countryCode`, `box_id`, `offer_id`, `landingUrl`, `ip`, `password`, `date`) VALUES ";

$sql .= "(\"$firstName\", \"$lastName\", \"$phone\", \"$email\", \"$countryCode\", \"$box_id\", \"$offer_id\", \"$landingUrl\", \"$ip\", \"$password\", \"$data\")";

// echo '<br>' . $sql;
// exit();


// Use the PDO connection object to query the database
$stmt = $pdo->prepare($sql);
// $stmt = $pdo->prepare("SELECT * FROM leads"); // OK
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// dump($results);

?>
