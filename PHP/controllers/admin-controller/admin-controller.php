<?php
ob_start();  // Start buffering at the top
// Your code here, including includes and headers

session_start();
require_once("../../PHP/config/connection-db.php");

// ✅ ADMIN LOG IN
if (isset($_POST['adminlogin'])) {
    $admin_user = $_POST['admin-user'];
    $admin_pass = $_POST['admin-pass'];

    $query = "
        SELECT u.*, r.role_name 
        FROM Users_tb u
        INNER JOIN Roles_tb r ON u.role_id = r.role_id
        WHERE u.username = '$admin_user' AND r.role_name = 'Super Admin'
    ";
    
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $adminData = mysqli_fetch_assoc($result);

        if (password_verify($admin_pass, $adminData['password_hash'])) {
            $_SESSION['admin_id']   = $adminData['user_id'];
            $_SESSION['admin_name'] = $adminData['username'];
            $_SESSION['role']       = $adminData['role_name'];

            header("Location: ../../PHP/admin-ui/admin-main.php");
            exit();
        }
    }

    $_SESSION['error'] = "Unauthorized admin login!";
    header("Location: ../../PHP/user-interface/index.php");
exit();

}
ob_end_flush();  // Flush at the end
?>