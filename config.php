<?php
  require 'vendor/autoload.php'; 

  $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
  $dotenv->load();

  $dbHost = $_ENV['DB_HOST'];
  $dbUsername = $_ENV['DB_USERNAME'];
  $dbPassword = $_ENV['DB_PASSWORD'];
  $dbName = $_ENV['DB_NAME'];
  $dbPort = $_ENV['DB_PORT'];

  // Create connection
  //mysqli_connect(servername, username, password, dbname, port, socket)
  $link = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort);

  // Check connection
  if (!$link) {
    die("Connection failed: " . mysql_error());
  }
  echo "Connected successfully";

?>