<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    if ($action == 'register') {
        $nama_lengkap = $_POST['nama_lengkap'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $stmt = $conn->prepare("INSERT INTO users (nama_lengkap, email, password) VALUES (:nama_lengkap, :email, :password)");
        $stmt->execute(['nama_lengkap' => $nama_lengkap, 'email' => $email, 'password' => $password]);
        header("Location: ../pages/login.php");
    } elseif ($action == 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: ../pages/profile.php");
        } else {
            echo "Login gagal!";
        }
    } elseif ($action == 'update_profile') {
        $user_id = $_SESSION['user_id'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $alamat = $_POST['alamat'];
        $telepon = $_POST['telepon'];

        $stmt = $conn->prepare("UPDATE users SET nama_lengkap = :nama_lengkap, alamat = :alamat, telepon = :telepon WHERE id = :id");
        $stmt->execute(['nama_lengkap' => $nama_lengkap, 'alamat' => $alamat, 'telepon' => $telepon, 'id' => $user_id]);
        header("Location: ../pages/profile.php");
    }
}
?>