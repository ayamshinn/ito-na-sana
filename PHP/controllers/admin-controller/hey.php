<?php
session_start();
require_once("../../config/connection-db.php");
$password = password_hash("acudentAdminPass2025", PASSWORD_DEFAULT);

$query = "INSERT INTO Users_tb (
    user_code, role_id, username, password_hash, email, phone, created_at
) VALUES (
    'A-001',
    1, 
    'superadmin_users',
    '$password',
    'admin@acudent.com',
    '09999999999',
    NOW()
)";

if (mysqli_query($conn, $query)) {
    echo "✅ Admin account created successfully!";
} else {
    echo "❌ Error: " . mysqli_error($conn);
}
?>





<?php
ob_start();
session_start();

// Include the database connection file securely
$dbPath = __DIR__ . '/../connection-db.php';

if (!file_exists($dbPath)) {
    // Development-only error message (disable in production)
    die("Missing required file: $dbPath");
}

require_once $dbPath;

// Check if the login form was submitted
if (isset($_POST['adminlogin'])) {

    // Sanitize input
    $admin_user = trim($_POST['admin-user'] ?? '');
    $admin_pass = trim($_POST['admin-pass'] ?? '');

    // Use prepared statements to prevent SQL injection
    $query = "
        SELECT u.*, r.role_name
        FROM Users_tb AS u
        INNER JOIN Roles_tb AS r ON u.role_id = r.role_id
        WHERE u.username = ? AND r.role_name = 'Super Admin'
        LIMIT 1
    ";

    if ($stmt = mysqli_prepare($conn, $query)) {
        mysqli_stmt_bind_param($stmt, "s", $admin_user);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) === 1) {
            $adminData = mysqli_fetch_assoc($result);

            if (password_verify($admin_pass, $adminData['password_hash'])) {
                // Store admin session data
                $_SESSION['admin_id'] = $adminData['user_id'];
                $_SESSION['admin_name'] = $adminData['username'];
                $_SESSION['role'] = $adminData['role_name'];

                header("Location: ../../admin-ui/admin-main.php");
                exit;
            }
        }

        mysqli_stmt_close($stmt);
    }

    // Invalid credentials
    $_SESSION['error'] = "Unauthorized admin login!";
    header("Location: ../../user-interface/index.php?auth=failed");
    exit;
}
