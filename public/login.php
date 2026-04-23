<?php
require_once '../config/Database.php';
require_once '../classes/Auth.php';


$db = new Database();
$conn = $db->getConnection();
$auth = new Auth($conn);

// Proses login ketika form disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // panggil method login
    if ($auth->login($email, $password)) {
        // redirect jika berhasil
        header("Location: admin.php");
        exit;
    } else {
        $error = "username atau password salah";
    }
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/logregis.css">
</head>

<body>

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <div class="login-logo">
                    <i class="bi bi-grid-3x3-gap-fill"></i>
                </div>
                <h2>Welcome Back!</h2>
                <p>Login to your admin dashboard</p>
                <?php if (isset($error)) : ?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $error ?>;
                    </div>
                <?php endif; ?>
            </div>

            <form action="login.php" method="POST">
                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <div class="input-group-custom">
                        <input type="email" name="email" class="form-control-custom" placeholder="admin@example.com" required>
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-group-custom">
                        <input type="password" name="password" class="form-control-custom" placeholder="Enter your password" required>
                        <i class="bi bi-lock"></i>
                    </div>
                </div>

                <div class="remember-forgot">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <a href="#" class="forgot-link">Forgot password?</a>
                </div>

                <button type="submit" class="btn-login">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Login
                </button>
            </form>

            <div class="divider">
                <span>Or continue with</span>
            </div>


            <div class="register-link">
                Don't have an account? <a href="register.php">Sign up</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>