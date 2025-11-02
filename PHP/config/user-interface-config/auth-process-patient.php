<?php
ob_start();
session_start();

$dbPath = __DIR__ . '/../connection-db.php';
if (!file_exists($dbPath)) {
    die("Missing required file: $dbPath");
}
require_once $dbPath;

/* -------------------------------------------------
   PATIENT LOGIN (Triggered by "signin")
--------------------------------------------------*/
if (isset($_POST['signin'])) {

    $username = trim($_POST['signin-username']);
    $password = trim($_POST['signin-pass']);

    $query = "SELECT u.user_id, u.username, u.password_hash, r.role_name, p.patient_id
              FROM Users_tb u
              INNER JOIN Roles_tb r ON u.role_id = r.role_id
              INNER JOIN Patients_tb p ON p.user_id = u.user_id
              WHERE u.username = ?
              LIMIT 1";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) === 1) {
        $patient = mysqli_fetch_assoc($result);

        // Ensure this user is a Patient
        if (strtolower($patient['role_name']) !== "patient") {
            $_SESSION['error'] = "This login is for patients only!";
            header("Location: ../../user-interface/index.php?auth=failed");
            exit();
        }

        if (password_verify($password, $patient['password_hash'])) {

            $_SESSION['user_id'] = $patient['user_id'];   // ← IMPORTANT for session guard
            $_SESSION['patient_id'] = $patient['patient_id'];
            $_SESSION['username'] = $patient['username'];
            $_SESSION['role'] = "Patient";

            header("Location: ../../patient-ui/patient-main.php");
            exit();
        }
    }

    $_SESSION['error'] = "Invalid patient login!";
    header("Location: ../../user-interface/index.php?auth=failed");
    exit();
}
?>
