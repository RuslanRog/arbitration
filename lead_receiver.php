<?php


// For beautiful dump();
// require __DIR__.'/vendor/autoload.php'; 


// API endpoint URL.
$url = 'http://arbitration.loc/api/v1/getstatuses/';

// Initialize cURL.
$curl = curl_init();

// Set cURL options.
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Execute cURL request.
$response = curl_exec($curl);

// Check for cURL errors.
if(curl_error($curl)) {
    echo 'Error: ' . curl_error($curl);
    exit;
}

// Close cURL connection.
curl_close($curl);

// dump($response);



?>
