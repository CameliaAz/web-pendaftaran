<?php 
include '../includes/db.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    
</head>
<body>
    <h1 class="text-center text-3xl font-bold mt-4">Register</h1>
<form action="../includes/auth.php" method="POST" class="max-w-md mx-auto p-4 bg-white rounded shadow-md">
    <input type="hidden" name="action" value="register">
    <div class="mb-4">
        <label for="nama_lengkap" class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama lengkap">
    </div>
    <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
        <input type="email" name="email" id="helper-text" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@gmail.com">
    </div>
    <div class="mb-4">
    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
    <div class="flex items-center">
    <input type="password" name="password" id="helper-text" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <button type="button" class="ml-2 text-gray-700" onclick="togglePassword('password')">
            <i id="password-icon" class="fas fa-eye-slash"></i>
        </button>
    </div>
</div>

<script>
    function togglePassword(id) {
        var passwordInput = document.getElementById(id);
        var passwordIcon = document.getElementById('password-icon');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordIcon.className = 'fas fa-eye';
        } else {
            passwordInput.type = 'password';
            passwordIcon.className = 'fas fa-eye-slash';
        }
    }
</script>
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Daftar</button>
    <p class="text-center text-sm text-gray-700 mt-2">Sudah memiliki akun? <a href="login.php" class="text-center text-blue-500 hover:text-blue-700">Login sekarang</a></p>
</form>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
