<?php

$host = getenv('DB_HOST') ?: 'db';
$database = getenv('DB_NAME') ?: 'kampus_db';
$username = getenv('DB_USER') ?: 'kampus_user';
$password = getenv('DB_PASS') ?: 'kampus_pass';

$dsn = "mysql:host={$host};dbname={$database};charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $error) {
    http_response_code(500);
    die('Database connection failed: ' . htmlspecialchars($error->getMessage()));
}
