<?php
include 'koneksi.php';
$tgl = date('Y-m-d');
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!doctype html>
<html>
<head>
    <title>Sistem Informasi Perpustakaan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: #dedede">
<div id="container" style="background-color: #C4C4C4">

    <nav class="navbar navbar-expand-lg" style="background-color: #C4C4C4">
        <div class="container-fluid" style="background-color: #C4C4C4">
            <nav class="navbar navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="https://cdn.pixabay.com/photo/2013/07/12/19/19/multimedia-154540_960_720.png" alt=""
                             width="30" height="24"> Perpustakaan Umum
                    </a>
                </div>
            </nav>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mt-3 ms-auto">
                    <p>Jl. Lembah Abang No 11, Telp: (021)55555555 </p>
            </div>
        </div>
    </nav>


    <div id="header2" class="text-center align-content-center">
        <h4 ="nama-user" class="text-center align-content-center">Hai Admin !</h4>
    </div>
    <div id="sidebar">
        <a href="index.php?p=beranda">Beranda</a>
        <p class="label-navigasi">Entry Data Dan Transaksi</p>
        <ul>
            <li><a href="index.php?p=anggota">Data Anggota</a></li>
            <li><a href="index.php?p=buku">Data Buku</a></li>
            <li><a href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a></li>
        </ul>
    </div>
    <div id="content-container">
        <div class="container">
            <div class="row"><br/><br/><br/>
                <div style="background-image:url('../asanoer-background.jpg')">
                    <div>
                        <div class="panel panel-warning login-panel">
                            <div class="panel-footer">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $pages_dir = 'pages';
        if (!empty($_GET['p'])) {
            $pages = scandir($pages_dir, 0);
            unset($pages[0], $pages[1]);
            $p = $_GET['p'];
            if (in_array($p . '.php', $pages)) {
                include($pages_dir . '/' . $p . '.php');
            } else {
                echo 'Halaman Tidak Ditemukan';
            }
        } else {
            include($pages_dir . '/beranda.php');
        }
        ?>
    </div>
    <div id="footer"><h3 class="strokeme" style="color: black;background-color: white">Sistem Informasi Perpustakaan (sipus) | Praktikum </h3></div>
</div>
</body>


</html>