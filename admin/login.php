<?php session_start(); ?>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  // Sample credentials
  if ($username === 'admin' && $password === '1234') {
    $_SESSION['admin'] = true;
    header('Location: dashboard.php');
    exit;
  } else {
    $error = "Invalid username or password.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-100 flex items-center justify-center h-screen">
  <div class="bg-white p-8 rounded shadow max-w-sm w-full">
    <h2 class="text-2xl font-bold mb-6 text-center text-green-800">Admin Login</h2>
    <?php if (isset($error)): ?>
      <p class="bg-red-100 text-red-700 p-2 mb-4 rounded"><?= $error ?></p>
    <?php endif; ?>
    <form method="POST">
      <input type="text" name="username" placeholder="Username" class="w-full p-3 mb-4 border rounded" required>
      <input type="password" name="password" placeholder="Password" class="w-full p-3 mb-4 border rounded" required>
      <button type="submit" class="w-full bg-green-700 text-white py-2 rounded hover:bg-green-800">Login</button>
    </form>
  </div>
</body>
</html>
