<?php
include "koneksi.php"; 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h1>login</h1>
    <form method="POST">
        <table class="login" border="1" cellpadding="10">
            <tr>
                <td>
                    <h5>email</h5>
                    <input type="email" name="email" placeholder="tulis email"><br><br>
                    <h5>password</h5>
                    <input type="password" name="password" placeholder="tulis password"><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit">login</button>
                    <a href="tambah.php">daftar</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
if ($_POST) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    $query = mysqli_query($conn, "SELECT * FROM data_user WHERE email='$email'");
    $user = mysqli_fetch_assoc($query);

    if ($user) {
        if ($password = $user['password']) {
            $_SESSION['user'] = $user['username'];
            $_SESSION['id'] = $user['id'];

            header("location: index.php");
            exit;
        } else {
            echo "!password salah";
        }
    } else {
        echo "email tidak di temukan silahkan daftar terlebih dahulu";
        }
}
?>