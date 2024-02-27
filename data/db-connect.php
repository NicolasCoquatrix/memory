<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbName = 'memory';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$dbName", $user, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    exit;
}

function escapeCharacters($input) {
    global $dbh;
    return $dbh->quote($input);
}