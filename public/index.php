<?php

require_once "../config/database.php";

$database = new Database();
$db = $database->connect();

echo "Connected to database successfully!";