<?php include '../includes/db.php'; ?>
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
        <input type="text" name="nama_lengkap" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
        <input type="email" name="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
    </div>
    <div class="mb-4">
    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
    <div class="flex items-center">
        <input type="password" name="password" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="password">
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
</form>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
