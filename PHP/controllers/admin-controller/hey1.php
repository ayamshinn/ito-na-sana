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




