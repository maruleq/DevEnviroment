<?php
require __DIR__ . '/vendor/autoload.php';

// Loads Environment Variables From .env Automagically
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <title>DEV Enviroment</title>
</head>

<body>
  <div class="container mt-4">
    <?php
    // Create connection witch variables set in docker.sh file
    $conn = new mysqli($_ENV['DB_HOST'], $_ENV['DB_NAME'], $_ENV['DB_PASSWORD']);

    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    ?>
    <div class="text-center">
      <?php
      echo '<h1>Welcome on WebServer ;-)</h1>';
      echo '<h2>Connected to database successfully!</h2>';
      echo '<br><br>';
      ?>
    </div>
    <?php
    echo '<h2>All available enviroment variables :</h2>';
    var_dump($_ENV);
    echo '<br><br>';

    echo '<h2>PHP Info:</h2>';
    phpinfo();
    ?>
  </div>
</body>
</html>