<?php
session_start();
// unset($_SESSION["uid"]);
// unset($_SESSION["name"]);
session_destroy();
session_start();
header("Location:login.php");
?>