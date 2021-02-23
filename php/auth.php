<?php 
	$mail = trim(filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL));
	$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

	$hash = "fdljhg4sdfhjkwjk33jsdfhj43ht34khgejrkgh33jhdfg";
	$pass = md5($pass . $hash);

	require_once "./mysql_connect.php";

	$sql = "SELECT `id` FROM `users` WHERE `mail` = :mail && `pass` = :pass"; //sql-запрос
	$query = $pdo->prepare($sql); //подготовка запроса
	$query->execute(["mail" => $mail, "pass" => $pass]); //выполнение запроса
	$user = $query->fetch(PDO::FETCH_OBJ);

	if($user->id == 0) {
		echo "Такого пользователя не существует!";
		exit();
	} else {
		setcookie("mail", $mail, time() + 3600 * 24 * 30, "/");
	}

	echo 'done';
?>