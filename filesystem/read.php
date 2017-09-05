<?php

$json = json_encode(readfile("example.json"));

echo $json['data'];

?>