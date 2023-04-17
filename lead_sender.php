<?php

// For beautiful dump();
// require __DIR__.'/vendor/autoload.php'; 


// Static fields
$box_id = 28;
$offer_id = 3;
$countryCode = "RU";
$language = "ru";
$password = "qwerty12";

$passwordHash = password_hash($password, PASSWORD_BCRYPT);


// Data to send to the API server.
$data = array(
    'firstName'     => $firstName,
    'lastName'      => $lastName,
    'phone'         => $phone,
    'email'         => $email,
    'box_id'        => $box_id,
    'offer_id'      => $offer_id,
    'countryCode'   => $countryCode,
    'language'      => $language,
    'password'      => $passwordHash,
    'ip'            => $ip,
    'landingUrl'    => $landingUrl
);


// dump($data);


// URL API-method "addlead".
$url = "http://arbitration.loc/api/v1/addlead/";


// CURL initialization.
$ch = curl_init();

// Setting URL Parameters.
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$result = curl_exec($ch);


// Error checking.
if(curl_errno($ch)){
    echo 'Ошибка cURL: ' . curl_error($ch);
}else{
    // Обработка ответа
    echo "Ответ сервера: " . $result;
}


//Closing a cURL connection.
curl_close($ch);


?>
