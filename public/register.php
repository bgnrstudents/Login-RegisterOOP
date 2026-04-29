    <?php
    require_once '../config/Database.php';
    require_once 'Auth/Auth.php';

    $db = new Database();
    $conn = $db->getConnection();
    $auth = new Auth($conn);

    // Proses register ketika form disubmit
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        // paggil method register
        if ($auth->register($name, $email, $password)) {
            // redirect ke halaman login jika berhasil
            header("Location: login.php");
            exit;
        } else {
            $error = "Pendaftaran gagal. Email sudah terdaftar";
        }
    }
    ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Admin Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="css/logregis.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <div class="register-container">
        <div class="register-card">
            <div class="register-header">
                <div class="register-logo">
                    <i class="bi bi-person-plus-fill"></i>
                </div>
                <h2>Create Account</h2>
                <p>Sign up to get started with admin dashboard</p>

                <?php if (isset($error)): ?>
                    <div class="alert alert-warning" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php endif; ?>

            </div>

            <form action="" method="POST">
                <div class="form-group">
                    <label class="form-label">Username</label>
                    <div class="input-group-custom">
                        <input type="text" name="name" class="form-control-custom" placeholder="John" required autocomplete="name">
                        <i class="bi bi-person"></i>
                    </div>
                </div>
                <div class="form-group">
                    <label class="form-label">Email Address</label>
                    <div class="input-group-custom">
                        <input type="email" name="email" class="form-control-custom" placeholder="admin@example.com" required autocomplete="email">
                        <i class="bi bi-envelope"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <div class="input-group-custom">
                        <input type="password" name="password" id="password" class="form-control-custom" placeholder="Create password" required autocomplete="new-password">
                        <i class="bi bi-lock"></i>
                    </div>
                    <div class="password-strength">
                        <div class="password-strength-bar" id="strengthBar"></div>
                    </div>
                </div>
                <button type="submit" class="btn-register">
                    <i class="bi bi-person-plus me-2"></i>Create Account
                </button>
            </form>

            <div class="login-link">
                Already have an account? <a href="login.php">Login here</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Password strength checker
        const passwordInput = document.getElementById('password');
        const strengthBar = document.getElementById('strengthBar');

        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;

            if (password.length >= 8) strength++;
            if (password.match(/[a-z]/) && password.match(/[A-Z]/)) strength++;
            if (password.match(/[0-9]/)) strength++;
            if (password.match(/[^a-zA-Z0-9]/)) strength++;

            strengthBar.className = 'password-strength-bar';

            if (strength === 0) {
                strengthBar.style.width = '0';
            } else if (strength <= 2) {
                strengthBar.classList.add('strength-weak');
            } else if (strength === 3) {
                strengthBar.classList.add('strength-medium');
            } else {
                strengthBar.classList.add('strength-strong');
            }
        });
    </script>
</body>

</html>
