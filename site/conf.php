<?php

require  __DIR__ . '/vendor/autoload.php';

// Loads Environment Variables From .env Automagically
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Create connection witch variables set in docker.sh file
$conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_NAME'], $_ENV['DB_PASSWORD']);

?>