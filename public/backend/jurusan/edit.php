<?php
session_start();
require_once __DIR__ . '/../../../config/database.php';
require_once __DIR__ . '/../../../classes/jurusan.php';

if (!isset($_SESSION['login']) && !isset($_SESSION['user'])) {
    header("Location: ../../login.php");
    exit;
}

$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

if (!$id) {
    $_SESSION['error'] = 'ID jurusan tidak valid';
    header("Location: index.php");
    exit;
}

$db = new Database();
$conn = $db->getConnection();
$jurusan = new Jurusan($conn);
$jurusan_data = $jurusan->getJurusanById($id);

if (!$jurusan_data) {
    $_SESSION['error'] = 'Data jurusan tidak ditemukan';
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Jurusan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <link href="../../css/admin.css" rel="stylesheet">
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-brand">
            <h4><i class="bi bi-grid-3x3-gap-fill me-2"></i>AdminPanel</h4>
        </div>
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="../../admin.php" class="nav-link">
                    <i class="bi bi-speedometer2"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="index.php" class="nav-link active">
                    <i class="bi bi-mortarboard"></i>
                    <span>Jurusan</span>
                </a>
            </li>
            <li class="nav-item" style="margin-top: 200px;">
                <a href="../../logout.php" class="nav-link">
                    <i class="bi bi-box-arrow-right"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="main-content">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2><i class="bi bi-pencil-square"></i> Edit Jurusan</h2>
                <a href="index.php" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Kembali
                </a>
            </div>

            <?php if (isset($_SESSION['error'])): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= htmlspecialchars($_SESSION['error']);
                    unset($_SESSION['error']); ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            <?php endif; ?>

            <div class="card shadow-sm">
                <div class="card-body">
                    <form method="POST" action="update.php">
                        <input type="hidden" name="id" value="<?= (int) $jurusan_data['id'] ?>">

                        <div class="mb-3">
                            <label for="kode" class="form-label">Kode Jurusan</label>
                            <input type="text" class="form-control" id="kode" name="kode" value="<?= htmlspecialchars($jurusan_data['kode_jurusan']) ?>" required>
                        </div>

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Jurusan</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="<?= htmlspecialchars($jurusan_data['nama_jurusan']) ?>" required>
                        </div>

                        <button type="submit" class="btn btn-success">
                            <i class="bi bi-save"></i> Update
                        </button>
                        <a href="index.php" class="btn btn-secondary">
                            <i class="bi bi-x-circle"></i> Batal
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
