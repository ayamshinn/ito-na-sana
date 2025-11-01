<?php

$host     = "localhost";      // database host (usually localhost)
$user     = "accudent_user";           // MySQL username
$pass     = "accudentaccpass2025";               // MySQL password (empty if XAMPP/WAMP default)
$db_name  = "acudent_db";        // your database name

$conn = mysqli_connect($host, $user, $pass, $db_name);

if (!$conn) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

?>
