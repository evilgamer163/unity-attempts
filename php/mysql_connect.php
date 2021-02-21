<?php
$user = "root";
$password = "root";
$db = "undb";
$host = "localhost";

$dsn = "mysql:host=$host;dbname=$db;";
$pdo = new PDO($dsn, $user, $password); //подключение к БД
?>