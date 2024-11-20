<?php
    require_once('C:\wamp64\www\LodeurUniquePIE2-1\vendor\autoload.php');
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
    $dotenv->load();

    $dbHost = $_ENV['dbHost'];
    $dbPort = $_ENV['dbPort'];
    $dbName = $_ENV['dbName'];
    $dbUser = $_ENV['dbUser'];
    $dbPassword = $_ENV['dbPass'];
    $dsn = "pgsql:host=$dbHost;port=$dbPort;dbname=$dbName";
?>