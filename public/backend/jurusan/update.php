<?php
session_start();
require_once __DIR__ . '/../../../config/database.php';
require_once __DIR__ . '/../../../classes/jurusan.php';

if (!isset($_SESSION['login']) && !isset($_SESSION['user'])) {
    header("Location: ../../login.php");
    exit;
}

$db = new Database();
$conn = $db->getConnection();
$jurusan = new Jurusan($conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $result = $jurusan->update($id, $_POST);

    if ($result['status']) {
        $_SESSION['success'] = $result['message'];
    } else {
        $_SESSION['error'] = $result['message'];
    }
}

header("Location: index.php");
exit;
?>
