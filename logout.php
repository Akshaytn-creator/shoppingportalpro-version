<?php
session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["name"]);
header("Location:1.php");
header("Location:forget.php");

?>