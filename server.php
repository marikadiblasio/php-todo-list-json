<?php 
$cip = file_get_contents('./data.json');
$phpCip = json_decode($cip, true);
 $jsCip = json_encode($phpCip);
header('Content-Type: application/json');