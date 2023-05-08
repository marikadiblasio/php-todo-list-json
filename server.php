<?php 
$cip = file_get_contents('./data.json');
 echo $cip;
$phpCip = json_decode($cip, true);
//var_dump(json_decode($cip, true, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK));
 var_dump($phpCip);
$jsCip = json_encode($phpCip);
header('Content-Type: application/json');
// echo $jsCip;