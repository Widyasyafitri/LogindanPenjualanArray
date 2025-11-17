<?php
session_start();

// Jika belum login, kembalikan ke halaman login
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h2>Selamat datang, <?php echo $_SESSION['username']; ?>!</h2>
<p>Role: <?php echo $_SESSION['role']; ?></p>

<a href="penjualan.php">Masuk ke Halaman Penjualan</a><br><br>
<a href="logout.php">Logout</a>

</body>
</html>
