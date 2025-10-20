<?php

//echo "<h2> Handling JSON Input</h2>";

$jsonData = file_get_contents('php://input');

$data = json_decode($jsonData, true);

if ($data !== null) {
    echo "\nReceived Data: \n";

    foreach ($data as $key => $value) {
        echo "$key: $value\n";
    }
} else {
        echo "\nInvalid JSON data.";
    }

    /* use postman and put this json in the body()
    {
      "Username": "admin",
      "Password": 1234
    }
    */   

?>