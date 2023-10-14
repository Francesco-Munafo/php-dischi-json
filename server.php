<?php 

//Read the file disks.json
$json_disks = file_get_contents('disks.json');
//var_dump($json_disks);
//Add header

header('Content-Type: application/json');
//Return json

echo $json_disks;
