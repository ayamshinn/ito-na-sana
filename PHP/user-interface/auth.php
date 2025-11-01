<?php
session_start();
require_once("../../PHP/config/db.php"); // adjust path if needed

// ========== USER SIGN IN ==========
if (isset($_POST['signin'])) {
    $username = $_POST['username'];
    $password = $_POST['pass'];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    
    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        if (password_verify($password, $user['password'])) {

            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];

            header("Location: index.php");
            exit();
        }
    }

    $_SESSION['error'] = "Invalid username or password!";
    header("Location: index.php");
    exit();
}



// ========== USER SIGN UP ==========
if (isset($_POST['signup'])) {
    $fname    = $_POST['Fname'];
    $lname    = $_POST['Lname'];
    $contact  = $_POST['Contact'];
    $email    = $_POST['email'];
    $username = $_POST['Username'];
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    // username check
    $check = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
    if (mysqli_num_rows($check) > 0) {
        $_SESSION['error'] = "Username already exists!";
        header("Location: index.php");
        exit();
    }

    mysqli_query($conn, "INSERT INTO users (fname,lname,contact,email,username,password)
                         VALUES('$fname','$lname','$contact','$email','$username','$password')");

    $_SESSION['success'] = "Account created successfully!";
    header("Location: index.php");
    exit();
}



// ========== ADMIN LOGIN ==========
if (isset($_POST['adminlogin'])) {
    $admin = $_POST['admin-user'];
    $pass  = $_POST['admin-pass'];

    $result = mysqli_query($conn, "SELECT * FROM admins WHERE username='$admin'");
    
    if (mysqli_num_rows($result) == 1) {
        $adminData = mysqli_fetch_assoc($result);

        if (password_verify($pass, $adminData['password'])) {

            $_SESSION['admin_id'] = $adminData['id'];
            $_SESSION['admin_name'] = $adminData['username'];

            header("Location: ../admin/dashboard.php");
            exit();
        }
    }

    $_SESSION['error'] = "Unauthorized admin login!";
    header("Location: index.php");
    exit();
}
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
        <div id="adminContainer" class="admin-container">
            <div class="admin-grow">
                <form method="POST">
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