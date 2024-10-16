<?php 
ob_start();
  // ******************************
  // For Connecting to the MYSQL database!
  // Make sure to include this in .php 
  // where you want database access
  // ******************************

  // We will use PDO Library to connect to database

  // MYSQL Credentials for connection
  $dbServer = getenv('MYSQL_SERVER');
  $dbUser = getenv('MYSQL_USER');
  $dbPassword = getenv('MYSQL_PASSWORD');
  $dbName = getenv('MYSQL_DATABASE');

  // Filtering to prevent SQL Injection
  $dbServer = filter_var($dbServer, FILTER_SANITIZE_SPECIAL_CHARS);
  $dbUser = filter_var($dbUser, FILTER_SANITIZE_SPECIAL_CHARS);
  $dbPassword = filter_var($dbPassword, FILTER_SANITIZE_SPECIAL_CHARS);
  $dbName = filter_var($dbName, FILTER_SANITIZE_SPECIAL_CHARS);

  $dns = "mysql:host=$dbServer;dbname=$dbName";

  try {
    // Connecting to the database
    $dbConn = new PDO($dns, $dbUser, $dbPassword);
  } catch (PDOException $e) {
    die("Database connection Error!");
  }

  
ob_end_flush();
