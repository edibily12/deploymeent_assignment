<?php
require_once __DIR__ . '/v1/api/UniversityAPI.php';

header('Content-Type: application/json');

$api = new UniversityAPI();
$api->processRequest();
