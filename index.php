<?php
session_start();
if (!isset($_SESSION['user'])) {
    header ("location: login.php");

}
?>
<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="login.php" class="logout-btn">logout</a>

    <div class="container">
        <h1>Fulan & Fulana</h1>

        <button onclick="window.location.href='../tamu/dashboard.php'">
            Buka Undangan 💍
        </button>
    </div>

</body>
</html>
