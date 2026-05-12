<?php
include '../koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM data_user WHERE id='$id'");
$item = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h1>edit</h1>
    <form method="post">
        <table>
            <tr>
                <td>
                    username: <input type="text" name="username" value="<?= $item['username']; ?>"><br><br>
                    password: <input type="text" name="password" value="<?= $item['password']; ?>"><br><br>
                    email: <input type="text" name="email" value="<?= $item['email']; ?>"><br><br>
                    level: <input type="text" name="level" value="<?= $item['level']; ?>"><br><br>

                    <button type="submit" name="update">update</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['update'])) {
    mysqli_query($conn, "UPDATE data_user SET
    username='$_POST[username]',
    password='$_POST[password]',
    email='$_POST[email]',
    level='$_POST[level]'
    WHERE id='$id'
    ");

    header("location: daftar.php");
}
?>