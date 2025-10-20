<?php
header("Content-Type: application/json");
$input = file_get_contents("php://input");
$data = json_decode($input, true);
$username = $data["username"];
$response = array(
    "status" => "success",
    "message" => "Welcome, $username!"
);
echo json_encode($response);
?>