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
    header("../../PHP/user-interface/index.php");
    exit();
}
ob_end_flush();  // Flush at the end
?>
<!-- Sign In/Sign Up Popup Modal -->
<div class="authentication-modal-container" id="authentication-modal-container-id">
    <div id="container" class="container">
        <button id="closeModal">&times;</button>

        <!-- Sign In Form -->
        <div class="form-container signin">
            <form method="POST">
                <div class="text">
                    <h2>Sign In</h2>
                    <h4>Welcome Back!</h4>
                </div>
                <div class="input-group">
                    <input type="text" id="signin-username" name="username" required>
                    <label for="signin-username">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" id="signin-pass" name="pass" required>
                    <label for="signin-pass">Password</label>
                </div>
                <div class="text">
                    <h4>Forgot Password?</h4>
                </div>

                <!-- IMPORTANT -->
                <button type="submit" name="signin">Sign In</button>

                <button type="button" id="adminLoginBtn">Admin log in</button>
            </form>

        </div>

        <!-- Sign Up Form -->
        <div class="form-container signup">
            <form method="POST">
                <div class="text">
                    <h2>Sign Up</h2>
                </div>
                <div class="row">
                    <div class="input-group">
                        <input type="text" id="Fname" name="Fname" required>
                        <label for="Fname">First Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" id="Lname" name="Lname" required>
                        <label for="Lname">Last Name</label>
                    </div>
                </div>
                <div class="input-group">
                    <input type="text" id="Contact" name="Contact" required>
                    <label for="Contact">Contact Number</label>
                </div>
                <div class="input-group">
                    <input type="email" id="email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="input-group">
                    <input type="text" id="Username" name="Username" required>
                    <label for="Username">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" id="signup-pass" name="pass" required>
                    <label for="signup-pass">Password</label>
                </div>
                <div class="input-group">
                    <input type="password" id="Cpass" name="Cpass" required>
                    <label for="Cpass">Confirm Password</label>
                </div>

                <!-- IMPORTANT -->
                <button type="submit" name="signup">Sign Up</button>
            </form>

        </div>

        <!-- Toggle Panel -->
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-right">
                    <div class="text">
                        <h2>SIGN UP NOW</h2>
                        <h4>Because your journey to better dental care starts here.</h4>
                    </div>
                    <button class="hidden" id="Sign Up">Sign Up</button>
                </div>
                <div class="toggle-panel toggle-left">
                    <div class="text">
                        <h2>WELCOME BACK!</h2>
                        <br>
                        <h4>Your smile journey continues—sign in to pick up where you left off.</h4>
                    </div>
                    <button class="hidden" id="Sign In">Sign In</button>
                </div>
            </div>
        </div>

        <!-- 🚀 Admin Overlay (MOVED INSIDE container) -->
        <div id="adminContainer" class="admin-container" >
            <div class="admin-grow">
                <form method="POST"  action="../../PHP/admin-ui/admin-main.php">
                    <h2>Admin Log In</h2>
                    <div class="input-group">
                        <input type="text" id="admin-user" name="admin-user" required>
                        <label for="admin-user">User ID</label>
                    </div>
                    <div class="input-group">
                        <input type="password" id="admin-pass" name="admin-pass" required>
                        <label for="admin-pass">Password</label>
                    </div>
                    <h4>Forgot Password?</h4>

                    <!-- IMPORTANT -->
                    <button type="submit" name="adminlogin" id="adminlogin">Log In</button>

                    <p class="back-arrow" onclick="goBack()">
                        <span class="arrow">&larr;</span>Back
                    </p>
                </form>

            </div>
        </div>
    </div>
</div>