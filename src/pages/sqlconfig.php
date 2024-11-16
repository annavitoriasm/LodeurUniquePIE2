<?php
    require_once('../../vendor/autoload.php');

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
    $dotenv->load();

    $dbHost = $_ENV['aws-0-sa-east-1.pooler.supabase.com'];
    $dbPort = $_ENV['6543'];
    $dbName = $_ENV['postgres'];
    $dbUser = $_ENV['postgres.yjqjikzgfvubiqswcbzz'];
    $dbPassword = $_ENV['lilacringe123@'];
    $dsn = "pgsql:host=$dbHost;port=$dbPort;dbname=$dbName";
?>