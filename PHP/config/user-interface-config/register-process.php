<?php
ob_start();
session_start();

// robust include using __DIR__
$dbPath = __DIR__ . '/../connection-db.php';

if (!file_exists($dbPath)) {
    die("Missing required file: $dbPath");
}

require_once $dbPath;

if (isset($_POST['signup'])) {

    $fname = trim($_POST['Fname']);
    $lname = trim($_POST['Lname']);
    $email = trim($_POST['email']);
    $username = trim($_POST['Username']);
    $password = $_POST['pass'];
    $confirmPass = $_POST['Cpass'];
    $phone = trim($_POST['Contact']); // ✅ NEW FIELD

    // Confirm passwords match
    if ($password !== $confirmPass) {
        $_SESSION['error'] = "Passwords do not match!";
        header("Location: ../../user-interface/index.php?signup=error");
        exit();
    }

    // Require phone number
    if (empty($phone)) {
        $_SESSION['error'] = "Phone number is required!";
        header("Location: ../../user-interface/index.php?signup=error");
        exit();
    }

    $hashedPass = password_hash($password, PASSWORD_DEFAULT);

    // ✅ Generate Patient User Code (P-001, P-002, …)
    $query = "SELECT user_code FROM Users_tb WHERE user_code LIKE 'P-%' ORDER BY user_code DESC LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $lastCode = $row['user_code'];
        $lastNumber = intval(substr($lastCode, 2));
        $newNumber = $lastNumber + 1;
        $user_code = "P-" . str_pad($newNumber, 3, "0", STR_PAD_LEFT);
    } else {
        $user_code = "P-001";
    }

    // ✅ Insert into Users_tb (now includes phone)
    $sqlUser = "INSERT INTO Users_tb (user_code, username, email, phone, password_hash, role_id, created_at) 
                VALUES (?, ?, ?, ?, ?, (SELECT role_id FROM Roles_tb WHERE role_name = 'Patient'), NOW())";

    $stmtUser = mysqli_prepare($conn, $sqlUser);

    if (!$stmtUser) {
        $_SESSION['error'] = "System error. Please try again later.";
        header("Location: ../../user-interface/index.php?signup=error");
        exit();
    }

    mysqli_stmt_bind_param($stmtUser, "sssss", $user_code, $username, $email, $phone, $hashedPass);

    if (mysqli_stmt_execute($stmtUser)) {

        $user_id = mysqli_insert_id($conn);

        // Insert into Patients_tb (unchanged)
        $sqlPatient = "INSERT INTO Patients_tb (user_id, first_name, last_name, birthdate, gender, address, medical_history) 
                       VALUES (?, ?, ?, NULL, NULL, NULL, NULL)";

        $stmtPatient = mysqli_prepare($conn, $sqlPatient);
        mysqli_stmt_bind_param($stmtPatient, "iss", $user_id, $fname, $lname);
        mysqli_stmt_execute($stmtPatient);

        mysqli_stmt_close($stmtUser);
        mysqli_stmt_close($stmtPatient);

        $_SESSION['success'] = "Registration successful!";
        header("Location: ../../user-interface/index.php?registered=1");
        exit();

    } else {
        $_SESSION['error'] = "Registration failed. Username, email, or phone already exists.";
        header("Location: ../../user-interface/index.php?signup=error");
        exit();
    }
}
?>
