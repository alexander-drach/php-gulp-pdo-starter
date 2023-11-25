<?php
$host = 'localhost';
$dbname = 'php_gulp_test';
$user = 'root';
$pass = 'root';

  try {
    $DBH = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  }
  catch(PDOException $e) {
    echo $e->getMessage();
  }