<?php
session_start();
if (!isset($_SESSION['user'])) {
    header ("location: index.php");
    exit;
}
?>
<?php include '../koneksi.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>Data user</h1>
    <a href="../tambah.php">+Tambah User</a>
    <table border="1" cellpadding="10">
        <tr>
            <th>id</th>
            <th>username</th>
            <th>password</th>
            <th>email</th>
            <th>level</th>
            <th>aksi</th>
        </tr>
        <?php
        $data = mysqli_query($conn, "SELECT * from data_user");
        while($item = mysqli_fetch_array($data)){
            ?>
        <tr>
            <td><?= $item['id']; ?></td>
            <td><?= $item['username']; ?></td>
            <td><?= $item['password']; ?></td>
            <td><?= $item['email']; ?></td>
            <td><?= $item['level']; ?></td>
            <td>
                <a href="edit.php?id=<?= $item['id'];?>">edit</a>
                <a href="hapus.php?id=<?= $item['id'];?>">hapus</a>
            </td>
        </tr>
            <?php
        }
        ?>
    </table>
</body>
</html>