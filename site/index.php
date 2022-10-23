<?php

require __DIR__ . '/vendor/autoload.php';

// Loads Environment Variables From .env Automagically
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


// Create connection witch variables set in docker.sh file
$conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_NAME'], $_ENV['DB_PASSWORD']);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo '<h1>Welcome on WebServer ;-)</h1>';
echo '<h2>Connected to database successfully!</h2>';
echo '<br><br>';

echo '<h2>Variables available:</h2>';
var_dump($_ENV);
echo '<br><br>';

echo '<h2>PHP Info:</h2>';
phpinfo();



