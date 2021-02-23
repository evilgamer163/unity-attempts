<?php 
   $name = trim(filter_var($_POST['name'], FILTER_SANITIZE_STRING));
   $mail = trim(filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL));
   $mess = trim(filter_var($_POST['mess'], FILTER_SANITIZE_STRING));

   require_once "./mysql_connect.php";

   $to = 'aspopov9@gmail.com';
   $subject = "=?utf-8?B?".base64_encode('New message')."?=";
   $headers = "From: $mail\r\nReply-to: $mail\r\nContent-type: text/plain; charset=utf-8\r\n";

   mail($to, $subject, $mess, $headers);

   echo 'done';
?>