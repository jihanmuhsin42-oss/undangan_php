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
</head>
<body>
    <h1>edit</h1>
    <form method="post">
        <table>
            <tr>
                <td>
                    username: <input type="text" name="username" VALUES="<?= $item['username']; ?>"><br><br>
                    username: <input type="text" name="password" VALUES="<?= $item['password']; ?>"><br><br>
                    username: <input type="text" name="email" VALUES="<?= $item['email']; ?>"><br><br>
                    username: <input type="text" name="level" VALUES="<?= $item['level']; ?>"><br><br>

                    <button type="submit" name="update"></button>
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
    passwrd='$_POST[password]',
    email='$_POST[email]',
    level='$_POST[level]',
    ");

    header(location: index.php);
}
?>