<?php 
   setcookie("mail", "", time() - 3600 * 24 * 30, "/"); 
   unset($_COOKIE['mail']);   
?>