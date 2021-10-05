<?php

// Load file autoload.php
require_once realpath(__DIR__ . '/vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$databaseHost = $_ENV['DB_HOST'];
$databaseName = $_ENV['DB_DATABASE'];
$databaseUsername = $_ENV['DB_USERNAME'];
$databasePassword = $_ENV['DB_PASSWORD'];

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$result = mysqli_query($mysqli, "SELECT inisial,komentar FROM komentar WHERE status='show' ORDER BY id DESC");
