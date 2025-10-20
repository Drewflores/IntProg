<?php

   echo "<h2>Basic JSON Encoding</h2>";

   $info = array("name" => "Drew", "age" => 32, "course" => "BSIT" );  

   $info_json = json_encode($info);

   echo $info_json;

?>