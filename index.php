<?php
    header ("location: login.php");

?>
<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:flex-start;
            font-family:Arial, sans-serif;
            background-image:url("tamu/foto/foto.png");
            background-size:cover;
            background-position:center;
            background-repeat:no-repeat;
        }

        .container{
            margin-top:80px;
            text-align:center;
            color:white;
        }

        h1{
            font-size:40px;
            letter-spacing:2px;
            margin-bottom:30px;
            text-shadow:0 0 10px rgba(0,0,0,0.6);
        }

        button{
            padding:15px 45px;
            font-size:20px;
            border:none;
            border-radius:12px;
            background:#f3f2f0;
            color:#06cfd6;
            cursor:pointer;
            box-shadow:0 10px 25px rgba(0,0,0,0.4);
            transition:0.3s;
        }

        button:hover{
            transform:scale(1.08);
            box-shadow:0 0 40px #ffffff;
        }
    </style>
</head>

<body>
    <a href="logout.php">logout</a>

    <div class="container">
        <h1>Fulan & Fulana</h1>

        <button onclick="window.location.href='../tamu/dashboard.php'">
            Buka Undangan 💍
        </button>
    </div>

</body>
</html>
