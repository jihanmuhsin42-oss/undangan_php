<?php
include '../koneksi.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
</head>
<body>
    <h1>tambah data</h1>
    <form method="post">
        <table>
            <tr>
                <td>
                    username: <input type="text" name="username"><br><br>
                    password: <input type="password" name="password"><br><br>
                    email: <input type="email" name="email"><br><br>
                    level: <input type="text" name="level"><br><br>

                    <button type="submit" name="simpan">simpan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($conn, "INSERT INTO data_user (username, password, email, level) VALUES
    '$_POST[username]',
    '$_POST[password]',
    '$_POST[email]',
    '$_POST[level]'
    )");

    header("location: index.php");
}