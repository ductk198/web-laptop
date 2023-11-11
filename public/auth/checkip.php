<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');
header('Content-Type: application/json');
$a = [
	'ip' => $_SERVER['HTTP_CF_CONNECTING_IP'],
	'country' => $_SERVER['HTTP_CF_IPCOUNTRY'],
];
echo json_encode($a);
exit;
