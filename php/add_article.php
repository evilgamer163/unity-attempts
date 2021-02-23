<?php 
	$title = trim(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
	$text = trim(filter_var($_POST['text'], FILTER_SANITIZE_STRING));
   $date = time();
   $autor = $_COOKIE['mail'];

	require_once "./mysql_connect.php";

	$sql = "INSERT INTO articles(title, text, date, autor) VALUES(?, ?, ?, ?)"; //sql-запрос
	$query = $pdo->prepare($sql); //подготовка запроса
	$query->execute([$title, $text, $date, $autor]); //выполнение запроса

	echo 'done';
?>