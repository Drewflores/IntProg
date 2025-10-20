<?php

//echo "<h2>JSON Response Api Simulation</h2>"; 


header('Content-Type: application/json');

$userProfile = array(
    "id" => 12345,
    "name" => "Andrew",
    "email" => "ByaheniDrew@korokan.com",
    "status" => "active"
);

$jsonInfo = json_encode($userProfile);

echo $jsonInfo; 

/*
$userProf = [
    "id" => 54321,
    "name" => "John",
    "email" => "kinamatisan@korokan.com",
    "status" => "inactive"
];

echo json_encode($userProf);
*/

?>