<?php

session_start();
unset($_SESSION["login"]); 
header('Location: http://localhost/web2/login.php');

?>