<?php
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'Patient') {
    header("Location: ../../PHP/user-interface/index.php");
    exit();
}
?>
