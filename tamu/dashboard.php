<?php
include "../koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Undangan Pernikahan</title>

    <style>
        body{
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f8f5f2;
            color: #333;
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;
            background:#ffffff;
            font-family:Arial;
            background-image: url("foto/fotoo.png");
            background-size: cover;
            background-position: center;      
            background-repeat: no-repeat;      
        }

        nav{
            background: #8b5e3c;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 22px;
            font-weight: bold;
            letter-spacing: 2px;
        }

        section{
            max-width: 900px;
            margin: auto;
            padding: 30px 20px;
        }

        h2{
            text-align: center;
            margin: 10px 0;
        }

        h2 span{
            color: #8b5e3c;
            font-weight: bold;
        }

        p{
            text-align: center;
            line-height: 1.8;
            margin: 25px 0;
        }

        h1{
            text-align: center;
            margin-top: 50px;
            color: #8b5e3c;
        }

        .btn{
            text-align: center;
            margin-top: 30px;
        }

        .btn img{
            width: 160px;
            height: 160px;
            object-fit: cover;
            border-radius: 15px;
            margin: 8px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .lokasi{
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .lokasi img{
            width: 30%;
            max-width: 600px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .pesan-box{
            max-width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .pesan-box input,
        .pesan-box textarea{
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 10px;
            border: 1px solid #ccc;
            font-size: 15px;
        }

        .pesan-box textarea{
            height: 100px;
            resize: none;
        }

        .pesan-box button{
            width: 100%;
            padding: 12px;
            background: #8b5e3c;
            color: white;
            border: none;
            border-radius: 20px;
            font-size: 16px;
            cursor: pointer;
        }

        #daftarPesan{
            max-width: 600px;
            margin: 30px auto;
        }

        .pesan-item{
            background: #fff;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .pesan-item h4{
            margin: 0;
            color: #8b5e3c;
        }

        .pesan-item p{
            margin: 8px 0 0;
            text-align: left;
        }

        /* MUSIK */
        .music-btn{
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            border: none;
            background: #8b5e3c;
            color: white;
            font-size: 22px;
            cursor: pointer;
            box-shadow: 0 0 15px rgba(0,0,0,0.3);
        }
    </style>
</head>

<body>
    <a href="logout.php">logout</a>

<audio id="musik" loop>
    <source src="musik.mp3" type="audio/mpeg">
</audio>

<button onclick="toggleMusic()" class="music-btn">🎵</button>

<nav>Fulan & Fulana</nav>

<section>

    <h2>Nama <span>Fulan</span></h2>
    <h2>Nama <span>Fulana</span></h2>

    <p>
        Saya pertama kali bertemu dia sejak SMK.  
        Entah kenapa dia itu bagi saya spesial.  
        Tidak ada yang bisa kupikirkan selain dia,  
        dan ternyata dia juga merasakan hal yang sama.  
        Setelah menjadi MT, kami pun melanjutkan  
        ke jenjang pernikahan. 💍
    </p>

    <div class="btn">
        <img src="foto/foto1.jpg">
        <img src="foto/foto2.jpg">
        <img src="foto/foto3.jpg">
        <img src="foto/foto4.jpg">
    </div>

    <h1>Lokasi</h1>

    <div class="lokasi">
        <img src="lokasii.jpg">
    </div>

    <h1>Pesan & Doa Tamu</h1>

    <div class="pesan-box">
        <input type="text" id="nama" placeholder="Nama Tamu">
        <textarea id="pesan" placeholder="Tulis pesan atau doa..."></textarea>
        <button onclick="kirimPesan()">Kirim Pesan</button>
    </div>

    <div id="daftarPesan"></div>

</section>

<script>
const musik = document.getElementById("musik");
let play = false;

function toggleMusic(){
    if(!play){
        musik.play();
        play = true;
    } else {
        musik.pause();
        play = false;
    }
}

function kirimPesan(){
    let nama = document.getElementById("nama").value;
    let pesan = document.getElementById("pesan").value;

    if(nama === "" || pesan === ""){
        alert("Nama dan pesan tidak boleh kosong!");
        return;
    }

    let daftar = document.getElementById("daftarPesan");

    let div = document.createElement("div");
    div.className = "pesan-item";
    div.innerHTML = `<h4>${nama}</h4><p>${pesan}</p>`;

    daftar.prepend(div);

    document.getElementById("nama").value = "";
    document.getElementById("pesan").value = "";
}
</script>

</body>
</html>