<?php 
require_once 'connect.php';

session_destroy(); //sessionを消す

// session_unset($_SESSION['id']); idsessionだけを消す

header("Location: login.php");

 ?>