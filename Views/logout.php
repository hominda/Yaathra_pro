<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   unset($_SESSION["user_id"]);
   echo 'You have cleaned session';
   header('Refresh: 0; URL = index.php');
?>