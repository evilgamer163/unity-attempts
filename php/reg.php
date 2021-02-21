<?php 
   $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
   $mail = trim(filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL));
   $pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

   $err = "";
   if( strlen($name) <= 3 || strlen($mail) <= 3 || strlen($pass) <= 3 ) {
      $err = "Поле заполненно неккоректно!";
   }

   if($err !== "") {
      echo $err;
      exit();
   }

   $hash = "fdljhg4sdfhjkwjk33jsdfhj43ht34khgejrkgh33jhdfg";
   $pass = md5($pass . $hash);

   require_once "./mysql_connect.php";

   $sql = "INSERT INTO users(name, mail, pass) VALUES(?, ?, ?)"; //sql-запрос
   $query = $pdo->prepare($sql); //подготовка запроса
   $query->execute([$name, $mail, $pass]); //выполнение запроса

   echo 'done';
?>