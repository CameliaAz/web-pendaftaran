<?php include '../includes/db.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1 class="text-3xl text-center font-bold mt-4 ">Login</h1>
    <form action="../includes/auth.php" method="POST" class="w-full max-w-md mx-auto p-4 bg-white rounded shadow-md">
        <input type="hidden" name="action" value="login">
        <div class="mb-4">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
            <input type="email" name="email" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <div class="mb-4">
            <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password:</label>
            <input type="password" name="password" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Login</button>
        <p class="text-center text-sm text-gray-700 mt-2">Belum memiliki akun? <a href="register.php" class="text-center text-blue-500 hover:text-blue-700">Daftar sekarang</a></p>
    </form>

    <script src="https://cdn.tailwindcss.com"></script>
</body>
</html>