<?php 

echo "<h2>Decoding JSON</h2>";

$jsonData = '{
    "name": "Andrew",
    "age": 23,
    "email": "andrewflores@paresoverload.com"
}';

$dataPhpOb = json_decode($jsonData);
$dataPhpAr = json_decode($jsonData, TRUE);

echo "php object <br>";
echo '<pre>' .print_r($dataPhpOb, TRUE). '</pre>';

echo "<br> php array <br>";
echo '<pre>' .print_r($dataPhpAr, TRUE). '</pre>';

?>