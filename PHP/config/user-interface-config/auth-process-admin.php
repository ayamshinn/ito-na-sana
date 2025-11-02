<?php
ob_start();
session_start();

$dbPath = __DIR__ . '/../connection-db.php';
if (!file_exists($dbPath)) {
    die("Missing required file: $dbPath");
}
require_once $dbPath;

/* -------------------------------------------------
   STAFF / ADMIN LOGIN (Triggered by "adminlogin")
--------------------------------------------------*/
if (isset($_POST['adminlogin'])) {

    $username = trim($_POST['admin-user']);
    $password = trim($_POST['admin-pass']);

    $query = "SELECT u.*, r.role_name 
              FROM Users_tb u
              INNER JOIN Roles_tb r ON u.role_id = r.role_id
              WHERE u.username = ?
              LIMIT 1";

    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result && mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        // ❌ Block Patient from staff portal
        if ($user['role_name'] === "Patient") {
            $_SESSION['error'] = "Patients must use the Patient Login.";
            header("Location: ../../user-interface/index.php?auth=failed");
            exit();
        }

        // Verify password
        if (password_verify($password, $user['password_hash'])) {

            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role_name'];

            if ($user['role_name'] !== 'Super Admin') {
                $getProfile = "SELECT staff_profile_id FROM Staff_Profile_tb WHERE user_id = ?";
                $stmt2 = mysqli_prepare($conn, $getProfile);
                mysqli_stmt_bind_param($stmt2, "i", $user['user_id']);
                mysqli_stmt_execute($stmt2);
                $profileResult = mysqli_stmt_get_result($stmt2);
        
                if ($profileResult && mysqli_num_rows($profileResult) === 1) {
                    $profile = mysqli_fetch_assoc($profileResult);
                    $_SESSION['staff_profile_id'] = $profile['staff_profile_id'];
                }
            }

            // Redirect based on role
            switch ($user['role_name']) {
                case 'Super Admin':
                    header("Location: ../../admin-ui/admin-main.php");
                    break;
                case 'Dentist':
                    header("Location: ../../dentist-ui/dentist-main.php");
                    break;
                case 'Front Desk':
                    header("Location: ../../staff-ui/staff-frontdesk-main.php");
                    break;
                case 'Assistant':
                    header("Location: ../../staff-ui/staff-assistant-main.php");
                    break;
                default:
                    $_SESSION['error'] = "Your role has no assigned portal.";
                    header("Location: ../../user-interface/index.php?auth=failed");
            }
            exit();
        }
    }

    // If login fails
    $_SESSION['error'] = "Invalid staff/admin credentials!";
    header("Location: ../../user-interface/index.php?auth=failed");
    exit();
}
?>
